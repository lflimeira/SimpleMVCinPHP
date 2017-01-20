<?php
//Include the PersonController class that will manage the classes PersonModel and PersonView.
require('mvc/controller/PersonController.php');
//Start application.
$personController = new PersonController();
$personController->index();
?>