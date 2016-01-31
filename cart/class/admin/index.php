<?php

	# 後台功能

	class OGSADMIN{

		public static 
			$class, // 宣告建構子
			$lang, // 語言包
			$temp, // 樣板
			$temp_option; // 選項樣板

		function __construct(){

			CORE::summon(__FILE__);
			
			$func = array_shift(CORE::$args);
			self::$temp = CORE::$cfg["temp"]['admin'];
			self::$temp_option = CORE::$cfg["temp"]['admin_option'];
			self::$lang = include CORE::$path.'lang/lang-cht.php';

			CORE::res_init('ogs_admin','font','css');
			CORE::res_init('default','js');
			//MANAGER::check(); # 登入檢查

			switch($func){
				case "stock": // 庫存管理
					new STOCK(true);
				break;
				case "order": // 訂單管理
					new ORDER;
				break;
				case "member": // 會員管理
					self::$class["member"] = new MEMBER(true);
				break;
				case "logout": // 登出
					self::$temp["NAV"] = '';
					self::$temp["MAIN"] = self::$temp_option["MSG"];
					session_destroy();
					CORE::msg(CORE::$lang["logout_done"],'/login.php');
				break;
				case "system": // 系統設定
					self::$temp["MAIN"] = 'ogs-admin-system-tpl.html';
					self::system();
				break;
				case "system-replace":
					self::$temp["MAIN"] = self::$temp_option["MSG"];
					self::system_replace();
				break;
				default:
					self::$temp["MAIN"] = self::$temp_option["INDEX"];
				break;
			}

			if(!CHECK::is_ajax()){
				new VIEW(self::$temp_option["HULL"],self::$temp,false,1);
			}
		}

		# 目前左邊選單標籤
		public static function nav_current($class,$func){
			$func_tag = (!empty($func))?'_'.strtoupper($func):'';
			VIEW::assignGlobal('CURRENT_NAV_'.$class.$func_tag,'class="current"');
		}

		# 系統設定
		private static function system(){
			$rsnum = CRUD::dataFetch('system',array('id' => '1'));
			if(!empty($rsnum)){
				foreach(CRUD::$data[0] as $field => $var){
					VIEW::assignGlobal("VALUE_".strtoupper($field),$var);
				}
			}
		}

		# 系統設定更新
		private static function system_replace(){
			CHECK::is_email($_POST["email"]);
			CHECK::is_must($_POST["ship"]);

			if(CHECK::is_pass()){
				$rsnum = CRUD::dataFetch('system',array('id' => '1'));
				$args["id"] = "1";
				$new_args = array_merge($args,$_POST);

				if(empty($rsnum)){
					CRUD::dataInsert('system',$new_args);
				}else{
					CRUD::dataUpdate('system',$new_args);
				}

				if(!empty(DB::$error)){
					CORE::msg(DB::$error,CORE::$manage.'system/');
				}else{
					CORE::msg(self::$lang["modfiy_done"],CORE::$manage.'system/');
				}
			}
		}
	}

?>