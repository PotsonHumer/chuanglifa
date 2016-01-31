<?php
	
	class DB{
		public static $con;
		public static $error;
		public static $sql;
		
		function __construct($db=array()){
			$default = array(
				'host' => 'localhost',
				'user' => 'root',
				'pass' => '',
				'db' => 'ogs'
			);
			$db = array_merge($default,$db);
			self::$con = mysql_connect($db['host'],$db['user'],$db['pass'],true) or die ('Error connecting to MySQL');
			mysql_select_db($db['db'],self::$con) or die('Database '.$db['db'].' does not exist!');
		}
	
		function __destruct(){
			mysql_close(self::$con);
		}
	
		public static function execute($sql){
			mysql_query("set names utf8");
			$result = mysql_query($sql,self::$con);
			self::error();
			return $result;
		}
		
		public static function select($options,$custom=false){
			/*
			$default = array (
				'table' => '',
				'field' => '*',
				'where' => '1',
				'order' => '1',
				'limit' => 50
			);
			$options = array_merge($default,$options);
			*/
			
			if($options){ // 判斷是否有輸入值
				if(empty($options['where'])){ $where = ""; }else{ $where = "WHERE {$options['where']}"; }
				if(empty($options['order'])){ $order = ""; }else{ $order = "ORDER BY {$options['order']}"; }
				if(empty($options['limit'])){ $limit = ""; }else{ $limit = "LIMIT {$options['limit']}"; }
				
				$sql = "SELECT {$options['field']} FROM {$options['table']} 
						{$where} 
						{$order} 
						{$limit}";
				
				self::$sql = $sql;
				return self::execute($sql);
				
			}elseif($custom){
				
				self::$sql = $custom;
				return self::execute($custom);
				
			}else{
				return false;
			}
			
		}
		
		/*
		public static function seek($sql,$tag){
			mysql_data_seek($sql,$tag);
		}
		*/
		
		public static function field($tb_name){
			$sql = "SHOW FULL FIELDS FROM ".$tb_name;
			self::$sql = $sql;
			return self::execute($sql);
		}
		
		public static function fetch($sql,$fetch_array=false){
			
			if($sql && $sql!=false){
				if($fetch_array){
					return mysql_fetch_array($sql,MYSQL_NUM);
				}else{
					return mysql_fetch_assoc($sql);
				}
			}else{
				return false;
			}
			
		}
		
		public static function num($sql){
		
			if($sql && $sql!=false){
				return mysql_num_rows($sql);
			}else{
				return false;
			}
		}
		
		public static function replace($tbl_name,array $input){
			
			if(is_array($input) && count($input)){
				foreach($input as $field => $value){
					$value_str = ($value === 'null')?'NULL':"'".$value."'";
					$sql_array[] = "{$field} = {$value_str}";
				}
				
				$sql_str = implode(",",$sql_array);
				
				$sql = "REPLACE INTO ".$tbl_name." SET ".$sql_str;
				self::execute($sql);
			}
		}
		
		public static function insert($tbl_name,array $input){
			
			if(is_array($input) && count($input)){
				foreach($input as $field => $value){
					$field_array[] = $field;
					$value_array[] = ($value === 'null')?'NULL':"'".$value."'";
				}
				
				$field_str = implode(",",$field_array);
				$value_str = implode(",",$value_array);
				
				$sql = "INSERT INTO ".$tbl_name." ({$field_str}) VALUES ({$value_str})";
				self::execute($sql);
			}
		}
		
		public static function update($tbl_name,array $input){
			
			if(is_array($input) && count($input)){
				$input_keys = array_keys($input); // 輸出所有欄位名稱
				$last_key = array_pop($input_keys); // 取出最後一位
				
				$where_handle = $last_key." = '".$input[$last_key]."'"; // 組建 where 字串
				unset($input[$last_key]); // 刪除陣列最後一位
				
				foreach($input as $field => $value){
					$value_str = ($value === 'null')?'NULL':"'".$value."'";
					$sql_array[] = "{$field} = {$value_str}";
				}
				
				$sql_str = implode(",",$sql_array);
				
				$sql = "UPDATE ".$tbl_name." SET ".$sql_str." WHERE ".$where_handle;
				self::execute($sql);
			}
		}
		
		public static function delete($tbl_name,array $input){
			
			if(is_array($input) && count($input)){
				$field_array = array_keys($input);
				$field = array_shift($field_array);
				$value = $input[$field];
				
				$sql = "DELETE FROM ".$tbl_name." WHERE ".$field." = '".$value."'";
				self::execute($sql);
			}
		}
		
	 	public static function get_id(){
		    if(self::$con){
				return @mysql_insert_id(self::$con);
		    }else{
				return false;
		    }
		}
		
		protected function error(){
			self::$error = mysql_error();
		}
		
	}
?>