<?php  

function get_title() {
	echo 'Vegetables';
}


function display_content() { 

?> 
	
<?php
require_once 'item_filter.php';
require_once 'connection.php';

$sql = "SELECT * FROM vegetables WHERE item_name LIKE '%$name%'";

$result = mysqli_query($conn,$sql);
// $name = $_POST['item_name'];

if(mysqli_num_rows($result) > 0) {
echo "<div class='row'>";

while ($row = mysqli_fetch_assoc($result)) {
extract($row); 
?>
	<div class='col-xs-12 col-sm-6 col-md-4'>
		<div class='thumbnail'>	
			<img id='itemImage' src = <?php echo $item_image; ?> alt='vegetables'>
			<div class='caption'>
				<h3><?php echo $item_name; ?></h3>
				<p><?php echo "Php " . $item_price . ".00"; ?></p>
				<?php echo "<a href='display_veggies.php?id=$item_id'><button class='btn btn-primary' type='submit' name='view_more'>View Details</button></a>"; ?>
			</div>
		</div>
		<?php  
				if(!isset($_SESSION['role'])) {
					
				}elseif ($_SESSION['role'] == 'admin') {
					echo "<a href='edit_veggies.php?id=$item_id'><button class='btn btn-primary' type='submit' name='edit'>Edit</button></a>";
					echo "<a href='delete_veggies.php?id=$item_id'><button class='btn btn-default' type='submit' name='delete'>Delete</button></a>";
				}	
		?>
	</div>

<?php
}
echo "</div>";


?>	
		<?php if(!isset($_SESSION['role'])) { 

			  } elseif($_SESSION['role'] == 'admin') { 
		?>
		<div class='row'>
		<p><a href='add_veggies.php' class='btn btn-primary' id='add_new'>Add New</a></p>
		</div>
		<?php } ?>
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

