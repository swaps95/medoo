
<?php 
  class db{
		function __construct($hostname,$name,$passwd,$db){
			$this->hostname=$hostname;
			$this->name=$name;
			$this->passwd=$passwd;	
			$this->db=$db;	
		}
		function mysqlConnection(){
			$con=mysqli_connect($this->hostname,$this->name,$this->passwd,$this->db);
			if($con){
				echo "connection establish";
			}		
			else
			{
				echo "error in establishing connection";
			}
						
		}
}
$obj=new db("localhost","root","","cms");
$obj->mysqlConnection();
?>