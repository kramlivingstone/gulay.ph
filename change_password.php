<?php 

function get_title(){
	echo 'Change Password';
}


function display_content(){ ?>

	<div class='row'>
		<div class='col-sm-12 col-md-6'>
			<form method='POST'>
			<h2>Change Password</h2>
			<div class='form-group'>
				<label for='nameChge'>Username:</label>
				<input type='text' name='username' class='form-control' placeholder='Username'>
			</div>
			<div class='form-group'>
				<label for='old_password'>Old Password:</label>
				<input class='form-control' type='password' name='old_password' placeholder='Old Password'>
				<label for='new_password'>New Password:</label>
				<input class='form-control' type='password' name='new_password' placeholder='New Password'>
				<label for='confirm_password'>Confirm Password:</label>
				<input class='form-control' type='password' name='confirm_password' placeholder='Confirm Password'>
			</div>
			<input type='submit' class='btn btn-primary' name='change_pw' value='Change Password'>
			<input type='submit' class='btn btn-default' name='cancel_change_pw' value='Cancel'>
		</div>
	</div>

<?php
}

require_once 'index.php';

 ?>