<?php 

session_start();

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
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
				header('location:home.php');

			}
		} else {
			echo "Incorrect Username and Password!";
		}

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php get_title(); ?> </title>
	<!-- Skeleton CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Font Awesome -->

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Google Fonts -->

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">

<?php

require_once 'lib/script.php';
require_once 'partials/nav.php'; 

display_content();

require_once 'partials/footer.php';

?>



</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>