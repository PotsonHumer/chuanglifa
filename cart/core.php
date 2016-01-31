<?php

	class CORE{

		public static
			$db, // mysql 連線
			$cfg, // 設定參數
			$lang,// 語言包資料
			$root, // 語系根目錄
			$prefix, // 資料表前贅參數
			$langtag, // 語系標籤
			$manage, // 後台根目錄
			$path, // 實體根目錄
			$temp, // 樣板位置
			$admin_temp, // 後台樣板位置
			$class, // 啟動的 class
			$args, // 取得的參數
			$system, // 系統設定
			$temp_main, // 主要樣板
			$temp_option, // 選項樣板
			$temp_admin; // 後台樣板

		function __construct(){
			self::$path = ROOT_PATH;
			self::$cfg = include ROOT_PATH.'config/config.php';

			self::auto_include();
			self::$db = new DB(self::$cfg["connect"]);

			new ROUTER;
			self::permanent();
			ROUTER::class_init();
		}

		# 定義當前目錄位置
		public function real_path($__file=__FILE__,$addon=''){
			return realpath(dirname($__file)).DIRECTORY_SEPARATOR.$addon;
		}

		# 自動 include
		private static function auto_include(){
			$file_filter = self::$cfg["file_filter"]; // 針對根目錄檔案的過濾器，寫入不要 inlcude 的檔案
			$folder_filter = self::$cfg["dir_filter"]; // 針對子目錄檔案的過濾器，寫入不要 inlcude 的目錄名稱
			$class_filter = self::$cfg["class_filter"]; // 針對功能目錄檔案的過濾器，寫入不要 inlcude 的目錄名稱
			
			// include 檔案
			$files = glob(self::$path.'*.php');
			foreach($files as $f_key => $f_path){
				$f_name = str_replace(self::$path, '', $f_path);
				$f_name = str_replace('.php', '', $f_name);
				
				if(!in_array($f_name,$file_filter)){
					include_once $f_path;
				}
			}
			
			// include 目錄內檔案
			// 目錄內如有 summon.php, auto_include 會在此 include
			$dirs = glob(self::$path.'*', GLOB_ONLYDIR);
			foreach($dirs as $d_key => $d_path){
				$d_name = str_replace(self::$path, '', $d_path);
				$summon = file_exists($d_path.DIRECTORY_SEPARATOR.'summon.php');
				
				if(!in_array($d_name,$folder_filter) && $summon){
					include_once $d_path.DIRECTORY_SEPARATOR.'summon.php';
				}
			}

			// class include
			$class_dirs = glob(self::$path.'class/*', GLOB_ONLYDIR);
			foreach($class_dirs as $c_key => $c_path){
				$c_name = str_replace(self::$path.'class/', '', $c_path);
				$class = file_exists($c_path.DIRECTORY_SEPARATOR.'index.php');
				//$backend = file_exists($c_path.DIRECTORY_SEPARATOR.'backend.php');
				
				if(!in_array($c_name,$class_filter) && $class){
					include_once $c_path.DIRECTORY_SEPARATOR.'index.php';
				}

				/*
				if(!in_array($c_name,$class_filter) && $backend){
					include_once $c_path.DIRECTORY_SEPARATOR.'backend.php';
				}
				*/
			}
		}

		# summon include
		public static function summon($summon=__FILE__){

			$now_path_array = explode("/",$summon);
			$now_file_name = array_pop($now_path_array);

			$self_path = CORE::real_path($summon);

			$file_array = glob($self_path.'*.php');
			if(is_array($file_array) && count($file_array) > 1){
				foreach($file_array as $file_key => $file_path){
					if(!preg_match('/(summon.php|'.$now_file_name.')/',$file_path)){
						include_once $file_path;
					}
				}
			}
		}

		# 系統設定
		private static function system(){
			$rsnum = CRUD::dataFetch('system',array('id' => '1'));
			if(!empty($rsnum)){
				return CRUD::$data[0];
			}
		}

		# 常駐程序
		private static function permanent(){
			$router_array = array_keys(CORE::$cfg["lang"]);
			self::$root = (self::$cfg["router"] == $router_array[0])?CORE::$cfg["root"]:CORE::$cfg["root"].self::$cfg["router"].'/';
			self::$prefix = self::$cfg["prefix"];
			self::$langtag = self::$cfg["langtag"];
			self::$manage = self::$cfg["manage"];
			self::$temp = self::$path.self::$cfg["temp_path"].'_'.self::$cfg["router"].'/';
			self::$admin_temp = self::$path.self::$cfg["admin_temp"];
			self::$lang = include self::$path.'lang/lang-'.self::$cfg["langfix"].'.php';
			self::$system = self::system();

			self::$temp_main = CORE::$cfg["temp"]['main'];
			self::$temp_option = CORE::$cfg["temp"]['option'];
			self::$temp_admin = CORE::$cfg["temp"]['admin'];

			VIEW::assignGlobal(array(
				"TAG_ROOT_PATH" => self::$root,
				"TAG_MANAGE_PATH" => self::$manage,
				"TAG_THEME_PATH" => CORE::$cfg["images"],
				"TAG_CSS_PATH" => CORE::$cfg["css"],
				"TAG_JS_PATH" => CORE::$cfg["js"],
				"TAG_FILE_PATH" => CORE::$cfg["file"],
				"TAG_URL_PATH" => 'http://'.CORE::$cfg["url"].'/',
			));
		}

		# 系統訊息
		public static function msg($msg=false,$redirect=false,$sec=2){
			if(!empty($msg)){
				VIEW::assignGlobal("TAG_MSG",$msg);
			}

			if(!empty($redirect)){
				header("Refresh: {$sec}; url={$redirect}");
			}
		}

		# 信件方法 (來源位置,寄送位置,內容,抬頭,寄件者名稱)
		public static function mail_handle($from,$to,$mail_content,$mail_subject,$mail_name){
	        $from_email=explode(",",$from);
	        $mail_subject = "=?UTF-8?B?".base64_encode($mail_subject)."?=";
	        //寄給送信者
	        $MAIL_HEADER   = "MIME-Version: 1.0\n";
	        $MAIL_HEADER  .= "Content-Type: text/html; charset=\"utf-8\"\n";
	        $MAIL_HEADER  .= "From: =?UTF-8?B?".base64_encode($mail_name)."?= <".$from_email[0].">"."\n";
	        $MAIL_HEADER  .= "Reply-To: ".$from_email[0]."\n";
	        $MAIL_HEADER  .= "Return-Path: ".$from_email[0]."\n";    // these two to set reply address
	        $MAIL_HEADER  .= "X-Priority: 1\n";
	        $MAIL_HEADER  .= "Message-ID: <".time()."-".$from_email[0].">\n";
	        $MAIL_HEADER  .= "X-Mailer: PHP v".phpversion()."\n";          // These two to help avoid spam-filters
	        $to_email = explode(",",$to);
	        for($i=0;$i<count($to_email);$i++){
	            if($i!=0 && $i%2==0){
	                sleep(2);
	            }
	            if($i!=0 && $i%5==0){
	                sleep(10);
	            }
	            if($i!=0 && $i%60==0){
	                sleep(300);
	            }
	            if($i!=0 && $i%600==0){
	                sleep(2000);
	            }
	            if($i!=0 && $i%1000==0){
	                sleep(10000);
	            }
	            @mail($to_email[$i], $mail_subject, $mail_content,$MAIL_HEADER);
			}
		}

		# 隨機密碼
		public static function rand_password($length=8){
			$code_num = $length;

			while(++$i <= $code_num){
				$type = mt_rand(1,3);
				$upper = false;

				switch($type){
					case 3: # 大寫英文
						$upper = true;
					case 2: # 小寫英文
						$w = 1;
						$word = "a";
						$plus = mt_rand(1,26);
						while(++$w <= $plus){
							if($w > 1){
								++$word;
							}
						}

						$code_array[] = ($upper)?strtoupper($word):$word;
					break;
					default: # 數字
						$code_array[] = mt_rand(0,9);
					break;
				}
			}

			return implode('',$code_array);
		}

		// 載入外掛資源 (js,css), $custom_path => 自訂路徑
		public static function res_init(){
			global $cms_cfg,$tpl;
			
			static $box_title;
			static $css_title;
			static $js_title;
			static $custom_title;
			
			$new_title = func_get_args();
			$res_type = array_pop($new_title); // 最後一個值為資源類型
			
			switch($res_type){
				case "box":
					$res_tag = "TAG_JS_BOX";
					$res_title = 'box_title';
				break;
				case "css":
					$res_tag = "TAG_CSS_INCLUDE";
					$res_title = 'css_title';
				break;
				case "js":
					$res_tag = "TAG_JS_INCLUDE";
					$res_title = 'js_title';
				break;
				case "custom":
					$res_tag = "TAG_CUSTOM_INCLUDE";
					$res_title = 'custom_title';
				break;
			}
			
			if(is_array($$res_title)){
				$$res_title = array_merge($$res_title,$new_title);
			}else{
				$$res_title = $new_title;
			}
			
			if(count($$res_title)){
				// 利用翻轉刪除重複的值
				$$res_title = array_flip($$res_title);
				$$res_title = array_flip($$res_title);
				
				foreach($$res_title as $key => $value){
					
					switch($res_type){
						case "box":
							$res_insert .= '<script src="'.CORE::$cfg["js"].'box_serial/'.$value.'_box.js" type="text/javascript"></script>'."\n";
						break;
						case "css":
							$res_insert .= '<link href="'.CORE::$cfg["css"].$value.'.css" rel="stylesheet" type="text/css" />'."\n";
						break;
						case "js":
							$res_insert .= '<script src="'.CORE::$cfg["js"].$value.'.js" type="text/javascript"></script>'."\n";
						break;
						case "custom":
							$value_array = explode(".",$value);
							$custom_type = array_pop($value_array);
							
							switch($custom_type){
								case "css":
									$res_insert .= '<link href="'.$value.'" rel="stylesheet" type="text/css" />'."\n";
								break;
								case "js":
									$res_insert .= '<script src="'.$value.'" type="text/javascript"></script>'."\n";
								break;
							}
						break;
					}
				}
				
				VIEW::assignGlobal($res_tag,$res_insert);
			}
		}

		// eval 組合方法 start----------------------------------------------------------------------------

		function call_function($class,$function,$args){
			if(method_exists($class,$function)){
				eval($class."::{$function}(".self::args_combine($args).");");
			}else{
				//exit("{$class}::{$function} not exist!");
				exit('此功能不存在');
			}
		}

		# eval 組合參數
		function args_combine($args=false){
			CHECK::is_array_exist($args);

			if(CHECK::is_pass()){
				foreach($args as $args_key => $args_item){
					if(is_array($args_item)){
						$args_array[] = self::array_args_combine($args_item);
					}else{
						$args_array[] = "'{$args_item}'";
					}
				}

				return implode(",",$args_array);
			}else{
				return $args;
			}
		}

		# eval 陣列參數組合 
		function array_args_combine(array $args){
			foreach($args as $args_key => $args_var){
				$args_var = (is_array($args_var))?self::array_args_combine($args_var):"'{$args_var}'";
				$args_array[] = "'{$args_key}' => {$args_var}";
			}

			$args_combine = implode(",",$args_array);
			return "array({$args_combine})";
		}

		// eval 組合方法 end----------------------------------------------------------------------------

	}

	new CORE;
?>