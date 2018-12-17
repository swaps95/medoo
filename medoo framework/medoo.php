<?php
 require 'vendor/autoload.php';
 use Medoo\Medoo;
 $database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'cms',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
 ]);
$datas = $database->select("users", [
	"username",
	"user_id"
]);
foreach($datas as $data)
{
	echo "user_name:" . $data["username"] . " - id:" . $data["user_id"] . "<br/>";
}
 
?>