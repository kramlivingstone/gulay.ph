<?php 

function get_title(){
	echo 'Log Out';
}

function display_content(){
	
	if(isset($_SESSION['username'])) {
		session_unset($_SESSION['username']);
		header("Refresh:0, url='log_out.php'");
	}
	echo "You have been successfully logged out!";
}

require_once 'index.php';

 ?>