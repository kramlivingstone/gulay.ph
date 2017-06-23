
<?php 

require_once 'connection.php';


$sql = "SELECT DISTINCT item_category FROM vegetables";

$result = mysqli_query($conn,$sql);



echo "<div class='row'>";
echo "<div class='col-md-12'>";
echo "<form method='POST'>";
echo "<div class='form-group'>";
// echo "<label for='veggieCategory'>Vegetable Name:<label>";
echo "<p>Vegetable Name: </p>";
// echo "<select class='form-control' name='veggieCategory' id='filter'>";
// echo "<option>All</option>";
echo "<input type='text' name='item_name' class='form-control'>";
if(mysqli_num_rows($result)>0) {

while ($row = mysqli_fetch_assoc($result)) {
	extract($row);

 ?>
	
	
			

<?php 
}
}

// echo "</select> <br>";
echo "<input class='btn btn-primary' type='submit' name='search' value='Search'>";
echo "</div>";
echo "</form>";
echo "</div>";
echo "</div>";
?>