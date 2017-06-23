<?php 

require_once 'connection.php';

if(isset($_POST['add_new'])) {
	$item_name = $_POST['veggieName'];
	$item_description = $_POST['veggieDesc'];
	$item_image = "img/" . $_POST['veggieImage'];
	$item_price = $_POST['veggiePrice'];
	$item_category = $_POST['veggieCategory'];

	if($item_name != '' && $item_description != '' && $item_image != '' && $item_price != '' && $item_category != '')
	{
		$sql = "INSERT INTO vegetables(item_name,item_description,item_image,item_price,item_category)
				VALUES ('$item_name','$item_description','$item_image','$item_price', '$item_category')";
		mysqli_query($conn,$sql);
		echo "Item has been successfully added!";
		header('location:items.php');
	} else {
		echo "Please, fill in the blank fields!";
	}
}

if(isset($_POST['cancel_new'])) {
	header('location:items.php');
}

function get_title(){
	echo 'Add New Item';
}

function display_content(){ ?>


	<div class="row">
		<div class="col-sm-12 col-md-6">
			<form method="POST">
				<h2>Add New Item</h2>
				<div class="form-group">
					<label for='veggieName'>Name:</label>
					<input type="name" class="form-control" name="veggieName" id="veggieName" placeholder="Vegetable Name">
				</div>
				<div class="form-group">
					<label for='veggieDesc'>Description:</label>
					<textarea type="textarea" class="form-control" name="veggieDesc" placeholder="Description"></textarea>
				</div>
				<div class="form-group">
					<label for='veggieImage'>Image:</label>
					<input type="file" name="veggieImage">
				</div>
				<div class="form-group">
					<label for='veggiePrice'>Price:</label>
					<div class="input-group">
						<div class="input-group-addon">Php</div>
						<input type="text" class="form-control" name="veggiePrice" placeholder="Amount">
					</div>
				</div>
				<div class="form-group">
					<label for='veggieCategory'>Category:</label>
					<select class="form-control" name="veggieCategory">
						<option>Bulbs</option>
						<option>Flowers</option>
						<option>Fruits</option>
						<option>Fungi</option>
						<option>Leaves</option>
						<option>Roots</option>
						<option>Seeds</option>
						<option>Stems</option>
						<option>Tubers</option>
					</select>
				</div>
				
				<input class="btn btn-primary" type="submit" name="add_new" value="Add New">
				<input class="btn btn-default" type="submit" name="cancel_new" value="Cancel">
			</form>
		</div>
	</div>

<?php	
}

require_once 'index.php';
?>