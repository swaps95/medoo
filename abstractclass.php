<?php
  abstract class population {
		function show() {
			echo "population class";
		}
		abstract function displayFunction();
	}

interface cap_city {
	function capital();
	const age="25";
}

class mah extends population implements cap_city {
	function displayFunction() {
		echo "population displayed";
	}
	function capital() {
		echo "Delhi";
		echo mah::age;
	}
}
$obj=new mah();
$obj->show();
$obj->displayFunction();
$obj->capital();
?>

<!---------------------------------------------Stringfunction--------------------------------------------->
<!--strlen()-->
<!--sscanf()-->
<!--printf-->
<!--print-->
<!--strpos(string,'character') position of character instring-->
<!--chr(ascii)-->
<!--substr("helloworls",startpos,length)-->
<!--str_split(string,length)-->
<!--trim(string,charlist)  rtrim-->