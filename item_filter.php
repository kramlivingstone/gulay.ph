
<?php 

require_once 'connection.php';

$sql = "SELECT item_category FROM vegetables";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) {
echo "<div class='row'>";
echo "<div class='col-md-12'>";
echo "<form method='POST'>";
echo "<div class='form-group'>";
echo "<label for='veggieCategory'>Category:</label>";
echo "<select class='form-control' name='veggieCategory' id='filter'>";
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
 ?>
	
	<option><?php echo $item_category; ?></option>
			

<?php 
}
echo "</select> <br>";
echo "<input class='btn btn-primary' type='submit' name='search' value='Search'>";
echo "</div>";
echo "</form>";
echo "</div>";
echo "</div>";
}
?>