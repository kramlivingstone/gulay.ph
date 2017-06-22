<?php 


function get_title(){
	echo 'Registration';
}


require_once 'connection.php';

if(isset($_POST['add_user'])) {
	$username = $_POST['usernameReg'];
	$password = $_POST['passwordReg'];
	$confirm_password = $_POST['confirmpasswordReg'];
	$full_name = $_POST['nameReg'];
	$email = $_POST['emailReg'];

	if($password == $confirm_password) {
		$password = sha1($password);

		$sql = "INSERT INTO users(username,password,role,full_name,email) VALUES ('$username','$password','admin','$full_name','$email')";
		mysqli_query($conn,$sql);
		
		echo "Account has been successfully created!";
		header('location:login.php');
	} else {
		echo "Passwords does not match, Please try again.";
	}

}

 if(isset($_POST['cancel'])) {
 	header('location:login.php');
 }



function display_content(){ ?>
	

	 <div class='row'>
		 <div class='col-sm-12 col-md-6'>
			<form method = 'POST'>
				<h2>Registration</h2>
				<div class='form-group'>
					<label for='nameReg'>Full Name:</label>
					<input type='name' class='form-control' name='nameReg' id='nameReg' placeholder='Full Name'>
				</div>
				<div class='form-group'>
					<label for='usernameReg'>Username:</label>
					<input type='text' class='form-control' id='usernameReg' name='usernameReg' placeholder='Username'>
				</div>
				<div class='form-group'>
						<label for='passwordReg'>Password:</label>
						<input type='password' class='form-control' id='passwordReg' name='passwordReg' placeholder='Password'>
						<label for='confirmpasswordReg'>Confirm Password:</label>
						<input type='password' class='form-control' id='confirmpasswordReg' name='confirmpasswordReg' placeholder='Password'>
				</div>
				<div class='form-group'>
					<label for='emailReg'>E-mail Address:</label>
					<input type='email' class='form-control' name='emailReg' id='emailReg' placeholder='E-mail Address'>
				</div>
				<input class='btn btn-primary' type='submit' name='add_user' value='Register'>
				<input class='btn btn-default' href='login.php' type='submit' name='cancel' value='Cancel'>
			</form>
		</div>
		<div class='col-sm-12 col-md-6' id='regImage'>
			<img id='vegImage' src='img/artichoke.jpg'>
		</div>
	</div>

<?php
}

require_once 'index.php';

 ?>