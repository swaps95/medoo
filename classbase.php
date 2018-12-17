<?php 
  class outputs
	{
		
		 private $model;
  
  // Public methods and properties can be used by both the parent and the child classes.
  public function setModel($model)
  {
    $this -> model = $model;
  }
   
  public function getModel()
  {
    return $this -> model;
  }
		

		var $age=30;
    static $subject="mathml";
	
		var $name;
		function __construct($swap){
			$this->name=$swap;
		}
		static function subject(){
			echo outputs::$subject;
		}
    function age($ages){
			$this->age=$ages;
			echo $this->age;
			echo $this->name;	
			echo outputs::$subject;
			echo outputs::subject();
		}
	}
class car extends outputs{
	
	 public function driveItWithStyle()
  {
    return $this->age(30);
  }
	public function mathdisplay() {
		echo $this->name;
	}
	
}
$obj1=new car("swap");
$obj=new outputs("swapnil");
$obj1->setModel("game");


?>
<h2><?php
	  echo $obj->age ;
		echo $obj->age(25);
	  echo $_SERVER['PHP_SELF'];
	  echo $_SERVER['SERVER_NAME'];
	  echo $obj1->getModel();
	  echo $obj1->driveItWithStyle();
	  echo $obj1->mathdisplay();
   	echo __DIR__ ;
	?></h2>