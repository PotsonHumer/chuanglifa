<table border="2" align="center" cellpadding="5" cellspacing="5"> 
<tr>
<?php
for($a=1;$a<=9;$a++){
	echo "<td>";
	for($b=1;$b<=9;$b++){
		$c = $a*$b;
		echo $a."x".$b."="."$c"."<br/>";
	}
	echo "</td>";
}
?>
</tr>
</table>






<br />
<table border="2" align="center" cellpadding="5" cellspacing="5"> 
<tr>
	<td>
<?php
$a = 1;
$b = 1;

for($t=1;$t<=81;$t++){
	$c = $a*$b;
	echo $a."x".$b."="."$c"."<br/>";
	$b++;
	if($t % 9 == 0 && $t != 81){
		$a++;
		$b = 1;
		echo "</td><td>";
	}
}
?>
	</td>
</tr>
</table>
