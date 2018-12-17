<?php
class filename{
	var $dir="C:\xampp\htdocs\php-tut";
	var $filename="filename.txt";
	function filenameMod(){
		$sw=$this->dir.'/'.$this->filename;
	  $s=realpath($this->filename);
		echo $s;
		echo "<br>";
		print_r( pathinfo($sw));
		echo "<br>";
	}
	
	function filemodding(){
		if(file_exists($this->filename)){
			$s=fopen($this->filename,"w");
			fwrite($s,"this is new content");
		  echo fread($s,"2");
			echo fgets($s);
			echo fpassthru($s);
			echo "<br>";
			echo readfile($this->filename);
			fclose($s);
		}
		else{
			echo "file not found";
		}
		
	}
}
$obj=new filename();
$obj->filenameMod();
$obj->filemodding();
?>


<!--touch(path)     create filename -->
<!--file(path)  returns file in array line by line-->

<!--
pointers
rewind
fseek("path",30);
ftell(filename)  current pointer










194
-->
