<?php 

function get_title() {
	echo "";
}

function display_content() {

	$id = $_GET['id'];

	require_once 'connection.php';

	$sql = "SELECT * FROM vegetables WHERE item_id = '$id'";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)) {

		while($row = mysqli_fetch_assoc($result)) {

			extract($row); 
?>
	<div class="row">
		<div class="col-md-6">
			<h2><?php echo $item_name; ?></h2>
			<img id='delete_pic' src= <?php echo $item_image ?>>
		</div>
		<div class="col-md-6">
			<p><?php echo $item_description; ?></p>
		</div>
	</div>


<?php
		}

	}

}

require_once 'index.php';
 ?>