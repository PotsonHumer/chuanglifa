<?php
	
	return false;
	# 建立、讀取、更新、刪除 資料庫補助 class

	class CRUD{

		public static 
			$data, // 取得的資料
			$map; // 取得的資料列

		function __construct(){} // no need

		# 篩選條件處理
		public static function sk_handle(array $sk){
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
								case (preg_match("/%([^%])+/", $var)?true:false):
									$equation = 'like';
								case (preg_match("/([^%])+%/", $var)?true:false):
									$equation = 'like';
								case (is_array($var)?true:false):
									$equation = 'in';
									$var = "('".implode("','",$var)."')";
								default:
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
		private static function field_handle(array $fetch_array){
			if(!$fetch_array) return '*';
			return implode(",",$fetch_array);
		}

		# 排序方法
		private static function order_handle(array $order_array){
			foreach($order_array as $order_field => $order_sort){
				$order_str_array[] = $order_field.' '.$order_sort;
			}

			if(is_array($order_str_array)){
				return implode(",",$order_str_array);
			}else{
				return false;
			}
		}

		# 取得 function id
		private static function getfunc($args){
			if(!is_numeric($args)){
				self::dataFetch(
					CORE::$prefix.'_function',
					array(
						'name' => $args,
						'status' => 1,
					)
				);

				$func_row = self::dataClear();
				$func_id = $func_row["id"];
			}else{
				$func_id = $args;
			}

			return $func_id;
		}

		# 取得 field name
		private static function getField($args){
			if(is_numeric($args)){
				self::dataFetch(CORE::$prefix.'_field',array('id' => $args));
				$field_row = self::dataClear();
				$field_name = $field_row["name"];
			}else{
				$field_name = $args;
			}

			return $field_name;
		}

		# 組合 map 參數
		private static function mapArgs($num,array $map_row,array $value_array,array $args){
			self::$map["num"] = $num;
			self::$map[$map_row["id"]]['map'] = $map_row;

			CHECK::is_array_exist($value_array);
			if(CHECK::is_pass()){
				self::$map[$map_row["id"]]["num"] = count($value_array);

				switch(self::$map[$map_row["id"]]["num"]){
					case 1:
						$field = self::getField($value_array["f_id"]);
						self::$map[$map_row["id"]]["value"][0] = $value_array;
						self::$map[$map_row["id"]]["row"] = array($field => $value_array["data"]);
					break;
					default:
						foreach($value_array as $key => $value_row){
							$field = self::getField($value_row["f_id"]);
							self::$map[$map_row["id"]]["value"][$key] = $value_row;
							self::$map[$map_row["id"]]["row"] = array($field => $value_row["data"]);
						}
					break;
				}
			}
		}

		# private
		//---------------------------------------------------------------------------------------------
		# public

		# 清除紀錄資料列紀錄並轉出
		public static function dataClear(){
			$data = self::$data;
			self::$data = false;
			return $data;
		}

		# 取得各表資料
		public static function dataFetch($tb,$sk=false,$fetch=false,$sort=false){
			self::dataClear();

			$where = self::sk_handle($sk);
			$field = self::field_handle($fetch);
			$order = self::order_handle($sort);

			$select = array(
				'table' => $tb,
				'field' => $field,
				'where' => $where,
				//'order' => "",
				//'limit' => '0,1',
			);
			
			$sql = DB::select($select);
			$rsnum = DB::num($sql);
			
			switch($rsnum){
				case 0:
				break;
				case 1:
					self::$data = DB::fetch($sql);
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

		# 讀取整筆資料
		public static function dataRow(array $args){
			self::$map = false;

			# 組合尋找 map 參數
			foreach($args as $field => $value){
				switch($field){
					case "func_id":
						$map_args[$field] = (is_numeric($field))?$value:(self::getfunc($value));
						unset($args[$field]);
					break;
					case "id":
					case "map_id":
						$map_args[$field] = $value;
						unset($args[$field]);
					break;
				}
			}

			$map_num = self::dataFetch(CORE::$preifx.'_map',$map_args);
			$map_array = self::dataClear();

			switch($map_num){
				case 0:
				break;
				case 1:
					# only one map
					$value_num = self::dataFetch(CORE::$prefix.'_value',array("map_id" => $map_array["id"]));
					if(!empty($value_num)){
						$value_array = self::dataClear();
						self::mapArgs($map_num,$map_array,$value_array,$args);
					}
				break;
				default:
					# multi map
					foreach($map_array as $map_row){
						$value_num = self::dataFetch(CORE::$prefix.'_value',array("map_id" => $map_row["id"]));
						if(!empty($value_num)){
							$value_array = self::dataClear();
							self::mapArgs($map_num,$map_row,$value_array,$args);
						}
					}
				break;
			}

			# output to self::$map
		}

		# 創建整筆資料
		public static function dataInsert($function,array $args){

			# 取得 function id
			$func_id = self::getfunc($function);

			# 檢查 field 是否存在，如不存在進行建立
			$field_array = array_keys($args);
			foreach($field_array as $field_key => $field){
				$rs = self::dataFetch(
					CORE::$prefix.'_field',
					array(
						'name' => $field
					)
				);

				$field_row = self::dataClear();
				$field_id_array[$field] = $field_row["id"];
				
				if(!$rs){
					DB::insert(CORE::$prefix.'_field',array('name' => $field));
					$field_id_array[$field] = DB::get_id();
				}
			}

			# 創建 map
			$lang_array = array_keys(CORE::$cfg["lang"]); # 取得所有語系參數

			# 各語系均創建一筆資料
			foreach($lang_array as $lang){
				$map_args = array(
					'func_id' => $func_id,
					'lang_id' => "null", //? 補上 lang_id 取得方法
					'lang' => CORE::$cfg["lang"][$lang][1],
					'createdate' => date("Y-m-d H:i:s"),
				);

				DB::insert(CORE::$prefix.'_map',$map_args);
				$map_id = DB::get_id();

				# 創建 value
				foreach($args as $field => $value){
					DB::insert(CORE::$prefix.'_value',array(
						"map_id" => $map_id,
						"f_id" => $field_id_array[$field],
						"data" => $value,
						"createdate" => date("Y-m-d H:i:s"),
					));
				}
			}
		}
	}


	/*
	class ClassName extends CRUD{
		function __construct(argument){
			# code...
		}
	}
	*/
?>