<?php 

function get_title() {
	echo "Edit Items";
}



function display_content() { 

$id = $_GET['id'];

require_once 'connection.php';

$sql = "SELECT * FROM vegetables WHERE item_id = '$id'";

$result = mysqli_query($conn,$sql);


if(isset($_POST['edit'])) {
			$name = $_POST['name'];
			$description = $_POST['text_description'];
			$price = $_POST['item_price'];
			$category = $_POST['veggieCategory'];
			// echo $name;
			$sql2 = "UPDATE vegetables SET item_name ='$name', item_description ='$description', item_price='$price',item_category='$category' WHERE item_id='$id'";
			mysqli_query($conn,$sql2);
			header('location:items.php');
}

if(isset($_POST['cancel'])) {
	header('location:items.php');
}

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
	extract($row);
	// $name = $row['item_name'];
	// $description = $row['item_description'];
	// $image = $row['item_image'];
	// $price = $row['item_price'];
	// $category = $row['item_category'];
}
}
?>


<div class='row'>
	
	<form method='POST'>
	<div class='col-sm-12 col-md-6'>
	<h2>Edit an Item</h2>
			<div class='form-group'>
				<img id='delete_pic' src= <?php echo $item_image;?>>
			</div>
	</div>
	<div class='col-sm-12 col-md-6'>
			<div class='form-group'>
				<label for='item_name'> Vegetable Name:</label>
				<input type='text' class='form-control' name='name' value= <?php echo $item_name; ?>>
			</div>
			<div class='form-group'>
				<label for='item_description'> Description:</label>
				<textarea class='form-control' name='text_description'> <?php echo $item_description; ?>
				</textarea>
			</div>
			<div class='form-group'>
				<label for='item_price'>Item Price:</label>
				<input class='form-control' type='text' name='item_price' value= <?php echo $item_price; ?>>
			</div>
			<div class='form-group'>
					<label for='veggieCategory'>Category:</label>
					<select class='form-control' name='veggieCategory'>
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

			<label>Are you sure you want to update this item?</label>	
			<input class='btn btn-primary' type='submit' name='edit' value='Edit'>
			<input class='btn btn-default' type='submit' name='cancel' value='Cancel'>
	</div>
	</form>
</div>


<!-- // <div class='row'>
// 	<div class='col-md-6'>
// 		<form method='POST'>
			
// 		</form>
// 	</div>
// </div>
}
// } -->

<?php
}
require_once 'index.php';
?>