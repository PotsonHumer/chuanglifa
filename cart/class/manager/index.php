<?php

	# 管理員功能

	class MANAGER extends OGSADMIN{
		function __construct(){}

		# 檢查是否登入
		public static function check(){
			//$admin_id = SESS::get('admin_id');
			$admin_id = $_SESSION["m_user"];
			
			if(!empty($admin_id)){
				$select = array(
					'table' => 'member',
					'field' => '*',
					'where' => "m_id = '{$admin_id}'",
					//'order' => $order,
					//'limit' => $limit,
				);

				$sql = DB::select($select);
				$rsnum = DB::num($sql);

				$login = ($rsnum == 1)?true:false;
			}else{
				$login = false;
			}

			if(!$login){
				# 重導到登入頁
				self::$temp["NAV"] = '';
				self::$temp["MAIN"] = self::$temp_option["MSG"];
				CORE::msg(CORE::$lang["login_none"],'http://'.CORE::$cfg["url"].'/login.php');
				new VIEW(self::$temp_option["HULL"],self::$temp,false,1);
				exit;
			}
		}
	}

?>