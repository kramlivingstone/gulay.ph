<?php 

// $users = [
// 		 ['username' => 'admin', 
// 		 'password' => 'password',
// 		 'confirm_pw' => 'password',
// 		 'email' => 'test@yahoo.com.ph',
// 		 'name' => 'admin'],
// 		 ['username' => 'mark',
// 		 'password' => 'marasigan',
// 		 'confirm_pw' => 'marasigan',
// 		 'email' => 'kramlivingstone@yahoo.com.ph',
// 		 'name' => 'Mark Marasigan']
// ];


// $fp = fopen('users.json', 'w');
// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
// fclose($fp);


//Retrieving data from JSON file
$string = file_get_contents('users.json');
$users = json_decode($string, true);


if(isset($_POST['add_user'])) {
	$new_user = [];

	$new_user['username'] = $_POST['usernameReg'];
	$new_user['password'] = $_POST['passwordReg'];
	$new_user['confirm_pw'] = $_POST['confirmpasswordReg'];
	$new_user['email'] = $_POST['emailReg'];
	$new_user['name'] = $_POST['nameReg'];

	$users[] = $new_user;

	$fp = fopen('users.json', 'w');
	fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
	fclose($fp);
	header('location:login.php');
}

if(isset($_POST['cancel']))
	header('location:login.php');

foreach ($users as $value) {
	$username = $value['username'];
}


//items.php

// $items = [
// 			 ['name'=> 'Artichoke',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/artichoke.jpg',
// 			  'price' => 'Php 200.00',
// 			  'category' => 'Green'],	
// 			  ['name'=> 'Cabbage',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/cabbage.jpg',
// 			  'price' => 'Php 150.00',
// 			  'category' => 'Green'],
// 			  ['name'=> 'Carrot',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/carrot.jpg',
// 			  'price' => 'Php 120.00',
// 			  'category' => 'Orange'],
// 			  ['name'=> 'Cabbage',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/cabbage.jpg',
// 			  'price' => 'Php 150.00',
// 			  'category' => 'Green'],
// 			  ['name'=> 'Cabbage',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/cabbage.jpg',
// 			  'price' => 'Php 150.00',
// 			  'category' => 'Green'],
// 			   ['name'=> 'Artichoke',
// 			  'description' => 'A variety of a species of thistle cultivated as a food.',
// 			  'image' => 'img/artichoke.jpg',
// 			  'price' => 'Php 200.00',
// 			  'category' => 'Green']
// 		 ];


// $fp = fopen('vegetables.json', 'w');
// fwrite($fp, json_encode($items, JSON_PRETTY_PRINT));
// fclose($fp);

//Retrieving of Veggies
$veggies = file_get_contents('vegetables.json');
$items = json_decode($veggies, true);

	function create_dropdown($name,$option)
	{	
		echo "<select name='$name'>";
		echo "<option value='All'>All</option>";
		foreach ($option as $value) {
			if(isset($_POST[$name]) && $_POST[$name] == $value )
				echo "<option selected value='$value'>$value</option>";
			else
				echo "<option value='$value'>$value</option>";
		}	
		echo "</select>";
		echo " <input type='submit' name='submit' value='Submit'> <br>";
	}

	// ADD NEW VEGGIES

	if(isset($_POST['add_new'])){
		$new_veggies = [];

		$new_veggies['name'] = $_POST['veggieName'];
		$new_veggies['description'] = $_POST['veggieDesc'];
		$new_veggies['image'] = "img/" . $_POST['veggieImage'];
		$new_veggies['price'] = "Php " . $_POST['veggiePrice'] . ".00";
		$new_veggies['category'] = $_POST['veggieCategory'];

		$items[] = $new_veggies;

		$fp = fopen('vegetables.json', 'w');
		fwrite($fp, json_encode($items,JSON_PRETTY_PRINT));
		fclose($fp);
		header('location:items.php');
	}

	if(isset($_POST['cancel_new']))
		header('location:items.php');


	//CHANGE PASSWORD


	if (isset($_POST['change_pw']))
	{
		$string = file_get_contents('users.json');
		if ($string != null)
			$users = json_decode($string, true);
			
		$username = $_POST['username'];
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$confirm_pw = $_POST['confirm_password'];
		
		$index;

		foreach ($users as $key => $value) {
			if($value['username'] == $username && $value['password'] == $old_password && $new_password == $confirm_pw) {

				$index = $key;
				$users[$index]['password'] = $new_password;
				$users[$index]['confirm_pw'] = $confirm_pw;
			}
		}
		echo $index;
		
		$fp = fopen('users.json', 'w');
		fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
		fclose($fp);
		header('location:login.php');
	}

	if(isset($_POST['cancel_change_pw']))
	{
		header('location:login.php');
	}

	function login_session(){

		global $users;

		$login = false;

		if(isset($_POST['login'])){
				$username = $_POST['usernameLogin'];
				$password = $_POST['passwordLogin'];
				foreach ($users as $user) {
					if($username == $user['username'] && $password == $user['password'])
					{
						$login = true;
						$_SESSION['username'] = $username;
					 	header('location:home.php');
					} 
				}

				if ($login == false){
					echo "Incorrect username or password!";
				}
			}
		}


 ?>