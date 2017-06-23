<?php 


function get_title() {
	echo "Delete Items";
}



function display_content() { 



require_once 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM vegetables WHERE item_id = '$id'";

$result = mysqli_query($conn,$sql);

if(isset($_POST['delete'])) {
	$sql2 = "DELETE FROM vegetables WHERE item_id = '$id'";
	mysqli_query($conn,$sql2);

	header('location:items.php');
}

if(isset($_POST['cancel'])) {
	header('location:items.php');
}

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		extract($row);
?>

<div class="row">
	
	<div class="col-sm-12 col-md-6">
		<h2>Delete an Item</h2>
		<form method='POST'>
			<div class="form-group">
				<img id='delete_pic' src= <?php echo $item_image; ?>>
			</div>
	</div>
	<div class="col-md-6">
			<div class="form-group">
				<label for='item_name'> Vegetable Name:</label>
				<input type='text' class='form-control' name='item_name' value=  <?php echo $item_name; ?> >
			</div>
			<div class="form-group">
				<label for='item_description'> Description:</label>
				<textarea class='form-control' name='text_description'> <?php echo $item_description; ?>
				</textarea>
			</div>
			<div class="form-group">
				<label for='item_price'>Item Price:</label>
				<input class='form-control' type="text" name="item_price" value= <?php echo 'PHP' . $item_price .'.00'; ?>>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<form method="POST">
			<label>Are you sure you want to delete this item?</label>	
			<input class="btn btn-danger" type="submit" name="delete" value="Delete">
			<input class="btn btn-default" type="submit" name="cancel" value="Cancel">
		</form>
	</div>
</div>


<?php
}
}
}


require_once 'index.php';
 ?>