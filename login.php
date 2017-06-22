<?php 


if(isset($_POST['login'])) {
	require_once 'connection.php';

	$username = $_POST['usernameLogin'];
	$password = sha1($_POST['passwordLogin']);

	$sql = "SELECT * FROM users
			WHERE username = '$username'
			AND password = '$password'";

	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0) {
		while($row = mysqli_fetch_assoc($result)) {
			extract($row);
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;
			echo "Login Sucessful!";
		}
	} else {
		echo "Incorrect Username and Password!";
	}
}


function get_title(){
	echo 'Log In';
}

function display_content(){
	// session_start();

	// global $users;

	// if(isset($_POST['login'])){
	// 		$username = $_POST['usernameLogin'];
	// 		$password = $_POST['passwordLogin'];
	// 		foreach ($users as $user) {
	// 			if($username == $user['username'] && $password == $user['password'])
	// 			{
					
	// 			 	// header('location:home.php');
	// 			}
	// 		}
	// 	}
?>
	<div class='row'>
	<div class='col-sm-12 col-md-6'>
	<form method='POST'>
	<div class='form-group'>
			<label for='usernameLogin'>Username:</label>
			<input type='text' class='form-control'id='usernameLogin' name='usernameLogin' placeholder='Username'>
			</div>
			<div class='form-group'>
			<label for='passwordLogin'>Password:</label>
			<input type='password' class='form-control' id='passwordLogin' name='passwordLogin' placeholder='Password'>
			</div>
			<p>Forgot Password?<a href='change_password.php'> Click Here!</a></p>
			<p>Don't have an account yet?<a href=register.php> Sign Up Here!</a><p>
			<input class='btn btn-primary' type='submit' name='login' value='Log In'>
		</form>
		</div>
		<div class='col-sm-12 col-md-6' id='logImage'>
			<img class='artichokes' src='img/artichokes.png'>
		</div>
	</div>

<?php
}

require_once 'index.php';

?>