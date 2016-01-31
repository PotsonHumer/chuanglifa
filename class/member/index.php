<?php

	# 會員功能

	class MEMBER{

		private static $endClass;

		function __construct($end_switch=false){

			CORE::summon(__FILE__);

			if($end_switch){
				self::$endClass =  "MEMBER_BACKEND";
			}else{
				self::$endClass =  "MEMBER_FRONTEND";
			}
			
			new self::$endClass;
		}

		function __call($function,$args){
			CORE::call_function(self::$endClass,$function,$args);
		}
	}

?>