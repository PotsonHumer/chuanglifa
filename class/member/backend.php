<?php

	# 後台會員管理

	class MEMBER_BACKEND extends OGSADMIN{
		function __construct(){
			
			$func = array_shift(CORE::$args);

			switch($func){
				case "detail":
					self::$temp["MAIN"] = 'ogs-admin-member-detail-tpl.html';
					self::detail();
				break;
				case "reset-password":
					self::$temp["MAIN"] = self::$temp_option["MSG"];
					self::reset_password();
				break;
				case "replace":
					self::$temp["MAIN"] = self::$temp_option["MSG"];
					self::replace();
				break;
				case "del":
					self::$temp["MAIN"] = self::$temp_option["MSG"];
					self::del();
				break;
				default:
					self::$temp["MAIN"] = 'ogs-admin-member-list-tpl.html';
					self::row();
					$func = false;
				break;
			}

			self::nav_current('MEMBER');
		}

		# 會員列表
		private static function row(){
			$rsnum = CRUD::dataFetch('member',false,false,array('createdate' => 'desc'));
			if(!empty($rsnum)){
				VIEW::newBlock("TAG_MEMBER_BLOCK");
				foreach(CRUD::$data as $key => $row){
					VIEW::newBlock("TAG_MEMBER_LIST");
					foreach($row as $field => $var){
						switch($field){
							case "gender":
								$gender = ($var)?self::$lang["male"]:self::$lang["female"];
								if(is_null($var)) $gender = self::$lang["null"];
								VIEW::assign("VALUE_".strtoupper($field),$gender);
							break;
							case "verify":
								$verify = ($var)?self::$lang["verify_done"]:self::$lang["verify_none"];
								VIEW::assign("VALUE_".strtoupper($field),$verify);
							break;
							case "status":
								$status = ($var)?self::$lang["status_on"]:self::$lang["status_off"];
								VIEW::assign("VALUE_".strtoupper($field),$status);
							break;
							default:
								VIEW::assign("VALUE_".strtoupper($field),$var);
							break;
						}
					}

					VIEW::assign('VALUE_NUMBER',++$i);
				}
			}else{
				VIEW::newBlock("TAG_NONE");
			}
		}

		# 會員詳細
		private static function detail(){
			$id = array_shift(CORE::$args);
			$rsnum = CRUD::dataFetch('member',array('id' => $id));
			if($rsnum == 1){
				$row = CRUD::$data[0];

				foreach($row as $field => $var){
					switch($field){
						case "verify":
							if($var){
								VIEW::assignGlobal(array(
									"VALUE_".strtoupper($field) => 'checked',
									"VALUE_DISABLE" => 'disabled',
								));
							}
						break;
						case "gender":
							VIEW::assignGlobal("VALUE_".strtoupper($field).'_CK'.$var,'selected');
						break;
						case "status":
							VIEW::assignGlobal("VALUE_".strtoupper($field).'_CK'.$var,'selected');
						break;
						default:
							VIEW::assignGlobal("VALUE_".strtoupper($field),$var);
						break;
					}
				}
			}
		}

		# 產生新密碼
		private static function reset_password(){
			$id = array_shift(CORE::$args);

			CRUD::dataFetch('member',array('id' => $id));
			$row = CRUD::$data[0];

			$rand_password = CORE::rand_password();
			$forget_temp = 'ogs-mail-forget-tpl.html';

			CRUD::dataUpdate('member',array('password' => md5($rand_password),'id' => $row["id"]));
			CORE::msg(self::$lang["forget_send"],CORE::$manage.'member/detail/'.$row["id"].'/');

			# 原本樣板
			new VIEW(self::$temp_option["HULL"],self::$temp,true,1);
			$origin_output = VIEW::$output;

			# 輸出取回密碼樣板
			VIEW::assignGlobal('VALUE_RAND_PASSWORD',$rand_password);
			new VIEW($forget_temp,false,true,false);

			CORE::mail_handle('no-reply@system.chuanglifa.com',$row["account"],VIEW::$output,self::$lang["forget_recall"],$mail_name); # 寄出認證信
			exit;
		}

		# 會員更新
		private static function replace(){
			CRUD::dataUpdate('member',$_POST);
			if(!empty(DB::$error)){
				CORE::msg(DB::$error,CORE::$manage.'member/detail/'.$_POST["id"]);
			}else{
				CORE::msg(self::$lang["modfiy_done"],CORE::$manage.'member/detail/'.$_POST["id"]);
			}
		}

		# 會員刪除
		private static function del(){
			$id = array_shift(CORE::$args);
			DB::delete(CORE::$prefix.'_member',array("id" => $id));
			if(!empty(DB::$error)){
				CORE::msg(DB::$error,CORE::$manage.'member/detail/'.$id);
			}else{
				CORE::msg(self::$lang["del_done"],CORE::$manage.'member/');
			}
		}
	}

?>