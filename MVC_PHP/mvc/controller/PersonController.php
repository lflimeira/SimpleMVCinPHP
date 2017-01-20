<?php
//Include the PersonModel and PersonView classes.
require('mvc/model/PersonModel.php');
require('mvc/view/PersonView.php');
//The class PersonController wil manage the objcets PersonView and PersonModel.
class  PersonController
{
	//Attributes
	private $model;
	private $view;
	//Construct method
	function __construct()
  	{
  		//Instance a new object PersonModel that will call Luiz Felipe and is 23 years old.
  		$this->model = new PersonModel('Luiz Felipe', '23');
  		//Instance a new object PersonView.
		$this->view = new PersonView();
  	}
  	//The function index() will set in PersonView the value returned from PersonModel.
  	public function index()
  	{
  		$this->view->showPersonSpeaks($this->model->sayHello());
  	}
}
?>