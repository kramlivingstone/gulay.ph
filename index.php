<?php 

session_start();

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