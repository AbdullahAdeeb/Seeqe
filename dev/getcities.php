<?php 
include("include/config.php");
include("include/functions/import.php");
$result = insert_get_cities($_POST['prov'],$_POST['country']);
?>
<?php if (count($result) > 0) { ?>
	<br />
	<strong>City:</strong>
	<br />
	<select name="cities" id="cities" <?php if (isset($_POST['classstyle'])) { ?>style="<?php echo $_POST['classstyle']; ?>"<?php } ?>>
		<option value="">Choose City</option>
	<?php foreach ($result as $zn) { ?>
		<option value="<?php echo $zn['ID']; ?>"><?php echo $zn['name']; ?></option>
	<?php } ?>
	</select>
	
<?php } else { ?>
	No cities found
<?php } ?>
<?php
mysql_close();
?>