<?php
//The class PersonModel is responsible for the logic and data that could come from a database, file, etc.
class PersonModel
{
	//Attributes
	private $name;
	private $age;
	//Construct method
	function __construct($name, $age)
  	{
  		//The construct method sets into the attributes the values that was pass 
  		$this->name = $name;
  		$this->age 	= $age;
  	}
  	/*
  	The function sayHello() is responsible for return a static string, 
  	but it could be a value from database, file or even the result 
  	of a sum of values sended from a form.
  	*/
	public function sayHello($str = 'Hello World!!!')
  	{
  		$str = $this->name.' is '.$this->age.' years old and said: '.$str;
  		return $str;
  	}
  	//Methods getters and setters. 
  	public function setName($name)
  	{
  		$this->name = $name;
  	}  	
  	public function getName()
  	{
  		return $this->name;
  	}
  	public function setAge($age)
  	{
		$this->age = $age;
  	}
  	public function getAge()
  	{
  		return $this->age;
  	}

}

?>