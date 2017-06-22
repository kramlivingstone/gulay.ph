<div class="logo">
		<h1 id="brand-logo"><a href="home.php"><img src="img/logo.png"></a></h1>
</div>
<div class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		</div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    	<ul class="nav navbar-nav">
	    		<li><a href="home.php">Home</a></li>
	    		<li><a href="items.php">Vegetables</a></li>
	    		<li><a href="about.php">About</a></li>
	    		<li><a href="contact.php">Contact</a></li>
	    	</ul>
	    	<ul class="nav navbar-nav navbar-right">
	    	<?php 
	    		if(!isset($_SESSION['username'])){
		    	echo '<li id="login"><a href="login.php">Sign In</a></li>';
	    		} else {
	    			echo "<li class='dropdown'>";
		    			echo "<a href='login.php' class='dropdown-toggle' data-toggle='dropdown' role='button'>Hi, " . $_SESSION['username'] . " <span class='caret'></span></a>";
		    			echo "<ul class='dropdown-menu'>";
		    			if(isset($_SESSION['username'])){
		    				echo "<li><a href='log_out.php'>Sign Out</a></li>";
		    				//session_unset($_SESSION['username']);
		    			}
		    			echo "</ul>";
		    		echo "</li>";
	    		} 
	    	?>
	    	<li><a href="#">Cart (0)</a></li>
		    </ul>
	    </div>
	    <hr>
</div>