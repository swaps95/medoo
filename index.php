
 <!DOCTYPE html>
<html>
<body>
<!-- http://localhost/php-tut/index.php-->


<?php
	
	$a=10;
	$b=20;
	//Bubblesort
	function bubblesort(){
		$arr=array(20,50,30,90);
		for($i=0; $i < sizeof($arr)-1 ; $i++ ){
			for($j=0; $j < sizeof($arr)-$i-1 ; $j++){
				if($arr[$j] > $arr[$j+1]){
					$temp=$arr[$j];
					$arr[$j]=$arr[$j+1];
					$arr[$j+1]=$temp;
				}
			}
		}
		for($i=0;$i < sizeof($arr) ;$i++) {
			echo $arr[$i];
		}
	}
	
		//operators
	function operators() {
		$a=10;
	  $b=array(10,20,30);
		for($i=0;$i < 3;$i++)
		{
			echo $b[$i];
			echo '<br>';
		}
		if($a<20){
			echo "swapnil";
		}
	}
	function sas(){
		$c= $GLOBALS['a'] + $GLOBALS['b'];
		return $c;
	}
	
?>
<h2>swapnil
<!--
<?php 
	echo 
	sas();
	operators(); 
	bubblesort();
?> 
-->
	</h2>

</body>
</html> 