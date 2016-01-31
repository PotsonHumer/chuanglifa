<?php
	
	# 建立、讀取、更新、刪除 資料庫補助 class

	class CRUD{

		public static 
			$data, // 紀錄取得資料
			$args; // 輸出參數

		function __construct(){}

		# 引號處理
		private static function strslashes($var=false){
			if(!get_magic_quotes_gpc()){
				return addslashes($var); //stripslashes
			}else{
				return $var;
			}
		}

		# 篩選條件處理
		public static function sk_handle($sk=false){
			CHECK::is_array_exist($sk);

			if(CHECK::is_pass()){
				foreach($sk as $field => $var){
					switch($field){
						case "custom":
							$where_array[] = $var;
						break;
						default:
							switch($var){
								case "null":
									$where_array[] = $field.' IS NULL';
								break;
								default:
									if(preg_match("/%([^%])+/", $var) || preg_match("/([^%])+%/", $var)){
										$equation = 'like';
									}

									if(is_array($var)){
										$equation = 'in';
										$var = "('".implode("','",$var)."')";
									}

									$var = self::strslashes($var);

									$equation = (isset($equation))?" {$equation} ":' = ';
									$where_array[] = $field.$equation."'{$var}'";
								break;
							}
						break;
					}
				}

				if(is_array($where_array)){
					return implode(" and ",$where_array);
				}
			}

			return false;
		}

		# 取得欄位設定
		private static function field_handle($fetch_array=false){
			CHECK::is_array_exist($fetch_array);
			if(!CHECK::is_pass()) return '*';
			return implode(",",$fetch_array);
		}

		# 排序方法
		private static function order_handle($order_array=false){
			CHECK::is_array_exist($order_array);

			if(CHECK::is_pass()){
				foreach($order_array as $order_field => $order_sort){
					$order_str_array[] = $order_field.' '.$order_sort;
				}
			}

			if(is_array($order_str_array)){
				return implode(",",$order_str_array);
			}else{
				return false;
			}
		}

		# 檢查欄位是否符合資料表
		private static function match_field($tb_name,array $args){
			$sql = DB::field(CORE::$prefix."_".$tb_name);
			$rsnum = DB::num($sql);

			if(!empty($rsnum)){
				while($row = DB::fetch($sql)){
					$args_field = array_keys($args);
					if(in_array($row["Field"],$args_field)){
						$var = self::strslashes($args[$row["Field"]]);
						$new_args[$row["Field"]] = $var;
					}
				}

				CHECK::is_array_exist($new_args);
				if(CHECK::is_pass()){
					return $new_args;
				}else{
					DB::$error = CORE::$lang["no_args"];
					return false;
				}
			}

			return false;
		}

		# private
		//-------------------------------------------------------------------------------------------------------------------
		# public

		# 參數輸出
		public static function args_output($output=false,$tpl=false,$args=false){
			if(!$output){
				$sess_args = ($args !== false)?$args:$_REQUEST;
				SESS::write('last_args',$sess_args);
			}else{
				$args = SESS::get('last_args');
				CHECK::is_array_exist($args);
				if(CHECK::is_pass()){
					self::$args = $args;

					if($tpl){
						foreach($args as $field => $value){
							VIEW::assignGlobal("VALUE_".strtoupper($field),$value);
						}
					}
				}
			}
		}

		# 清除紀錄資料列紀錄並轉出
		public static function dataClear(){
			$data = self::$data;
			self::$data = false;
			return $data;
		}

		# 取得各表資料
		public static function dataFetch($tb_name,$sk=false,$fetch=false,$sort=false,$limit=false){
			self::dataClear();

			$where = self::sk_handle($sk);
			$field = self::field_handle($fetch);
			$order = self::order_handle($sort);

			$select = array(
				'table' => CORE::$prefix.'_'.$tb_name,
				'field' => $field,
				'where' => $where,
				'order' => $order,
				'limit' => $limit,
			);

			$sql = DB::select($select);
			$rsnum = DB::num($sql);
			
			switch($rsnum){
				case 0:
				break;
				case 1:
					self::$data[0] = DB::fetch($sql);
				break;
				default:
					while($row = DB::fetch($sql)){
						$all_row[] = $row;
					}

					self::$data = $all_row;
				break;
			}

			return $rsnum;
		}

		# 創建整筆資料
		public static function dataInsert($tb_name,array $args,$multi=false){
			$new_args = self::match_field($tb_name,$args);

			if(!$new_args){
				return false;
			}

			if($multi){
				foreach(CORE::$cfg["lang"] as $lang_array){
					$new_args["langtag"] = $lang_array[1];
					DB::insert(CORE::$prefix."_".$tb_name,$new_args);
				}
			}else{
				DB::insert(CORE::$prefix."_".$tb_name,$new_args);
			}
		}

		# 修改資料
		public static function dataUpdate($tb_name,array $args){
			$new_args = self::match_field($tb_name,$args);

			CHECK::is_array_exist($new_args);
			if(CHECK::is_pass()){
				$new_args = array_reverse($new_args);
				DB::update(CORE::$prefix."_".$tb_name,$new_args);
			}else{
				return false;
			}
		}
	}

?>