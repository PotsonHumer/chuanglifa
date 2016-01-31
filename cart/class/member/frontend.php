<?php

	# 前台會員功能

	class MEMBER_FRONTEND extends MEMBER{

		private static $id;
		private static $temp;
		private static $option_temp;

		function __construct(){

			$func = array_shift(CORE::$args);
			self::$id = SESS::get('m_id');
			self::$temp = CORE::$temp_main;

			switch($func){
				case "regist":
					self::$temp["MAIN"] = 'ogs-member-regist-tpl.html';
					CRUD::args_output(true,true);
				break;
				case "regist-act":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::regist();
				break;
				case "verify":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::verify();
				break;
				case "forget":
					self::$temp["MAIN"] = 'ogs-member-forget-tpl.html';
				break;
				case "forget-act":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::forget();
				break;
				case "cart-login":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::cart_login();
				break;
				case "login":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::login();
				break;
				case "logout":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::logout();
				break;
				case "profile":
					self::$temp["NAV"] = 'ogs-member-nav-tpl.html';
					self::$temp["MAIN"] = 'ogs-member-form-tpl.html';
					self::profile();
				break;
				case "modify":
					self::$temp["MAIN"] = CORE::$temp_option["MSG"];
					self::modify();
				break;
				case "order":
					self::$temp["NAV"] = 'ogs-member-nav-tpl.html';
					self::order();
				break;
				default:
					if(empty(self::$id)){
						self::$temp["MAIN"] = 'ogs-member-login-tpl.html';
					}else{
						self::$temp["MAIN"] = 'ogs-member-main-tpl.html';
					}
				break;
			}

			new VIEW(CORE::$temp_option["HULL"],self::$temp,false,false);
		}

		# 檢查登入
		private static function check(){
			if(empty(self::$id)){
				$none = ture;
			}else{
				$rsnum = CRUD::dataFetch('member',array('status' => '1','verify' => '1','id' => self::$id));
				if(empty($rsnum)) $none = ture;
			}

			# 檢查未過 強制登出 顯示警示
			if($none){
				self::$temp["MAIN"] = CORE::$temp_option["MSG"];
				CORE::msg(CORE::$lang["login_none"],CORE::$root.'member/');
				new VIEW('ogs-fn-main-tpl.html',self::$temp,false,false);
				exit;
			}
		}

		# 註冊功能
		private static function regist(){
			$account_check = CRUD::dataFetch('member',array('account' => $_POST["account"]));
			CHECK::is_email($_POST["account"]);
			CHECK::is_password($_POST["password"]);
			CHECK::is_same($_POST["password"],$_POST["password_match"]);
			CHECK::is_must($_POST["name"],$_POST["address"],$_POST["tel"],$_POST["callback"]);

			if(CHECK::is_pass() && empty($account_check)){

				# 預設值 / 更改
				$insert_args = $_POST;
				$insert_args["createdate"] = date("Y-m-d H:i:s");
				$insert_args["password"] = md5($_POST["password"]);

				CRUD::dataInsert('member',$insert_args);

				if(!empty(DB::$error)){
					CRUD::args_output();
					CORE::msg(DB::$error,CORE::$root.'member/regist/');
				}else{
					# 註冊成功，發送驗證信

					$verify_temp = 'ogs-mail-verify-tpl.html'; # 信件樣板

					$m_id = DB::get_id(); # 取得 id
					$verify_code = md5($_POST["account"].$insert_args["password"].$insert_args["createdate"].$m_id); # 組合認證碼
					$verify_path = 'http://'.CORE::$cfg["url"].CORE::$root."member/verify/{$verify_code}/"; # 組合認證路徑

					CRUD::dataUpdate('member',array('verify_code' => $verify_code,'id' => $m_id)); # 儲存認證碼

					# 輸出認證信樣板
					VIEW::assignGlobal('VALUE_VERIFY_PATH',$verify_path);
					new VIEW($verify_temp,false,true,false);

					CORE::mail_handle('no-reply@system.chuanglifa.com',$_POST["account"],VIEW::$output,CORE::$lang["regist_mail"],$mail_name); # 寄出認證信

					CORE::msg(CORE::$lang["regist_done"],CORE::$root.'member/'); # 完成訊息
				}
			}else{
				CRUD::args_output();

				if(!empty($account_check)){
					CORE::msg(CORE::$lang["account_exist"],CORE::$root.'member/regist/');
				}else{
					CORE::msg(CHECK::$alert,CORE::$root.'member/regist/');
				}
			}
		}

		# 驗證功能
		private static function verify(){
			$verify_code = array_shift(CORE::$args);
			$rsnum = CRUD::dataFetch('member',array('verify_code' => $verify_code,'verify' => '0'));
			if($rsnum == 1){
				$row = CRUD::$data[0];
				$verify_match = md5($row["account"].$row["password"].$row["createdate"].$row["id"]); # 組合對照認證碼

				CHECK::is_same($verify_match,$verify_code);
				if(CHECK::is_pass()){
					CRUD::dataUpdate('member',array('verify' => '1','id' => $row["id"]));
					
					# 修改尚未認證訂單狀態
					$o_rsnum = CRUD::dataFetch('order',array('status' => '11','m_id' => $row["id"],'del' => '0'));
					if(!empty($o_rsnum)){
						foreach(CRUD::$data as $o_row){
							CRUD::dataUpdate('order',array('status' => '1','id' => $o_row["id"]));
						}
					}

					# 自動登入
					SESS::write('m_id',$row["id"]);

					CORE::msg(CORE::$lang["verify_done"],CORE::$root.'member/');
					return true;
				}
			}

			CORE::msg(CORE::$lang["verify_error"],CORE::$root.'member/');
		}

		# 取回密碼功能
		private static function forget(){
			CHECK::is_email($_POST["account"]);
			CHECK::is_must($_POST["callback"]);

			if(CHECK::is_pass()){
				$rsnum = CRUD::dataFetch('member',array('status' => '1','verify' => '1','account' => $_POST["account"]));
				if(!empty($rsnum)){
					$row = CRUD::$data[0];
					$rand_password = CORE::rand_password();
					$forget_temp = 'ogs-mail-forget-tpl.html';

					CRUD::dataUpdate('member',array('password' => md5($rand_password),'id' => $row["id"]));

					# 輸出取回密碼樣板
					VIEW::assignGlobal('VALUE_RAND_PASSWORD',$rand_password);
					new VIEW($forget_temp,false,true,false);

					CORE::mail_handle('no-reply@system.chuanglifa.com',$row["account"],VIEW::$output,CORE::$lang["forget_recall"],$mail_name); # 寄出認證信
					CORE::msg(CORE::$lang["forget_send"],CORE::$root.'member/');
				}
			}else{
				CORE::msg(CHECK::$alert,CORE::$root.'member/');
			}
		}

		# 登入
		private static function login($path='member/order/'){
			CHECK::is_email($_POST["account"]);
			CHECK::is_password($_POST["password"]);

			if(CHECK::is_pass()){
				$rsnum = CRUD::dataFetch('member',array('status' => '1','verify' => '1','account' => $_POST["account"],'password' => md5($_POST["password"])));
				if($rsnum == 1){
					$row = CRUD::$data[0];
					SESS::write('m_id',$row["id"]);
					CORE::msg(CORE::$lang["login_done"],CORE::$root.$path);
					return true;
				}else{
					CORE::msg(CORE::$lang["login_error"],CORE::$root.$path);
					return false;
				}
			}else{
				CORE::msg(CHECK::$alert,CORE::$root.$path);
				return false;
			}
		}

		# 登出
		private static function logout(){
			session_destroy();
			CORE::msg(CORE::$lang["logout_done"],CORE::$root.'member/');
		}

		# 購物車登入
		private static function cart_login(){
			self::login('');
		}

		// 帳號相關
		//----------------------------------------------------------------------------------------------------
		// 會員功能

		# 顯示個人資料
		private static function profile(){
			self::check();
			$rsnum = CRUD::dataFetch('member',array('status' => '1','verify' => '1','id' => self::$id));

			if(!empty(self::$id) && $rsnum == 1){
				$row = CRUD::$data[0];
				foreach($row as $field => $var){
					switch($field){
						case "gender":
							VIEW::assignGlobal("VALUE_".strtoupper($field)."_CK".$var,'selected');
						break;
						default:
							VIEW::assignGlobal("VALUE_".strtoupper($field),$var);
						break;
					}
				}
			}
		}

		# 修改個人資料
		private static function modify(){
			self::check();
			CHECK::is_email($_POST["account"]);
			CHECK::is_must($_POST["name"],$_POST["address"],$_POST["tel"],$_POST["callback"]);

			if(!empty($_POST["password_old"]) || !empty($_POST["password"])){
				CHECK::is_password($_POST["password_old"]);
				CHECK::is_password($_POST["password"]);
				CHECK::is_same($_POST["password"],$_POST["password_match"]);
				$pass = CHECK::is_pass();

				$rsnum = CRUD::dataFetch('member',array('status' => '1','verify' => '1','id' => self::$id,'password' => md5($_POST["password_old"])));
				if(empty($rsnum) || empty($_POST["password_old"])){
					CORE::msg(CORE::$lang["args_error"],CORE::$root.'member/profile/');
					return false;
				}
			}else{
				$pass = CHECK::is_pass();
			}

			if($pass){
				$_POST["id"] = self::$id;
				$_POST["password"] = md5($_POST["password"]);

				CRUD::dataUpdate('member',$_POST);
				if(!empty(DB::$error)){
					CORE::msg(DB::$error,CORE::$root.'member/profile/');
				}else{
					CORE::msg(CORE::$lang["modfiy_done"],CORE::$root.'member/profile/');
				}
			}else{
				CORE::msg(CHECK::$alert,CORE::$root.'member/profile/');
			}
		}

		# 會員訂單列表
		private static function order(){
			$o_id = array_shift(CORE::$args);
			
			if(empty($o_id)){
				self::$temp["MAIN"] = 'ogs-member-order-tpl.html';
				$rsnum = CRUD::dataFetch('order',array('m_id' => self::$id),false,array('createdate' => 'desc'));
			}else{
				self::$temp["MAIN"] = 'ogs-member-order-detail-tpl.html';
				$rsnum = CRUD::dataFetch('order',array('id' => $o_id));
			}

			if(!empty($rsnum)){
				VIEW::newBlock("TAG_ORDER_BLOCK");
				foreach(CRUD::$data as $key => $row){
					VIEW::newBlock("TAG_ORDER_LIST");
					foreach($row as $field => $var){
						switch($field){
							case "payment_type":
								VIEW::assign("VALUE_".strtoupper($field),CORE::$lang["payment"][$var]);
							break;
							case "status":
								VIEW::assign("VALUE_".strtoupper($field),CORE::$lang["order_status"][$var]);
							break;
							default:
								VIEW::assign("VALUE_".strtoupper($field),$var);
							break;
						}
					}

					VIEW::assign("VALUE_ROW",++$o);
					VIEW::assignGlobal(array(
						"VALUE_SHIP" => $row["ship"],
						"VALUE_TOTAL" => $row["total"]
					));
				}

				if(!empty($o_id)){
					$serial = CRUD::$data[0]["serial"];
					$rsnum = CRUD::dataFetch('order_item',array('serial' => $serial));
					if(!empty($rsnum)){
						VIEW::newBlock("TAG_ITEM_BLOCK");
						foreach(CRUD::$data as $key => $row){
							VIEW::newBlock("TAG_ITEM_LIST");
							foreach($row as $field => $var){
								VIEW::assign("VALUE_".strtoupper($field),$var);
							}
							
							VIEW::assign("VALUE_ROW",++$i);
						}
					}
				}
			}else{
				# 無資料
				CORE::msg(CORE::$lang["no_data"],CORE::$root.'member/');
			}
		}
	}

?>