<?php  

function get_title() {
	echo 'Vegetables';
}


function display_content() { 

?> 
	
<?php  

require_once 'connection.php';


$sql = "SELECT * FROM vegetables";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) {
echo "<div class='row'>";
?>
<div class="col-md-12">
<form method="POST">
	<div class="form-group">
		<label for='veggieCategory'>Category:</label>
		<select class="form-control" name="veggieCategory" id="filter">
			<option>Bulbs</option>
			<option>Flowers</option>
			<option>Fruits</option>
			<option>Fungi</option>
			<option>Leaves</option>
			<option>Roots</option>
			<option>Seeds</option>
			<option>Stems</option>
			<option>Tubers</option>
		</select> <br>
		<input class="btn btn-primary" type="submit" name="search" value="Search">
	</div>
</form>
</div>
<?php
while ($row = mysqli_fetch_assoc($result)) {
extract($row); 
?>
	
	<div class='col-sm-6 col-md-4'>
		<div class='thumbnail'>	
			<img id='itemImage' src = <?php echo $item_image; ?> alt='vegetables'>
			<div class='caption'>
				<h3><?php echo $item_name; ?></h3>
				<p><?php echo "Php " . $item_price . ".00"; ?></p>
				<input class='btn btn-primary' type='submit' name='view_more' value='View Details'>
			</div>
		</div>
	</div>
		

<?php

}
echo "</div>"; 		
?>
		<div class='row'>
		<p><a href='add_veggies.php' class='btn btn-primary' id='add_new'>Add New</a></p>
		</div>
<?php
}  
}

require_once 'index.php';


	// foreach ($items as $item) {
	// 	if (!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
	// 		$name = $item['name'];
	// 		$description = $item['description'];
	// 		$price = $item['price'];
	// 		$image = $item['image'];
	// 		$category = $item['category'];
			
	// 		$name <br> $description <br> $price <br> $image <br> $category <br><hr>
	// 	}
	// }
	// Sir PeeJay version

	// foreach ($items as $item) {
	// 		<div class='row'>
	// 		foreach ($item as $key => $value) {
	// 			if ($key == 'name')
	// 				<div class='twelve column'>" . "<h3>" . $value ."</h3>" . "<br>
	// 			elseif ($key =='description')
	// 				echo $value . "<br>
	// 			elseif ($key == 'image')
	// 				<img src=$value>" . "<br>
	// 			elseif ($key == 'price')
	// 				echo $value . "</div>
	// 		}
	// 		<button class='button-primary'>Edit</button> 
	// 		<button class='button-primary'>Delete</button>
	// 		</div>
	// 		<hr>
	// 	}  
	// Version 1.0
?>

