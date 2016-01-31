<?
	include_once($_SERVER['DOCUMENT_ROOT']."/config/config.php");
	
	if(!empty($_REQUEST["n_id"])){
		$where_str = "n_id = '".$_REQUEST["n_id"]."'";
	}
		
	
	$sql = $db->select(array(
		'table' => "news",
		'fields' => "*",
		'condition' => $where_str,  //WHERE
		'order' => "n_sort asc",
		//'limit' => 0
	));
	
	$rsnum = $db->num($sql);
	if($rsnum > 0){	
		while($row = $db->field($sql)){
			echo $row["n_name"];
			echo "<br />";
			echo $row["n_content"];
		}		
	}
?>