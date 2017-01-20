<?php
//The class PersonController wil manage what wil be showed in the screen (what the user will see).
class PersonView
{
	//The function showPersonSpeaks() will show in the screen what the person spoke.
	public function showPersonSpeaks($str){
		echo '<h1>'.$str.'</h1>';
	}
}

?>