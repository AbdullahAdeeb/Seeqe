<?php 
include("include/config.php");
include("include/functions/import.php");
$result = insert_get_regions($_POST['country']);
?>
<?php if (count($result) > 0) { ?>
	<br />
	<strong>Region/State/Province:</strong>
	<br />
	<select name="province" id="province" <?php if (isset($_POST['classstyle'])) { ?>style="<?php echo $_POST['classstyle']; ?>"<?php } ?>>
		<option value="">Please Select</option>
	<?php foreach ($result as $zn) { ?>
		<option value="<?php echo $zn['code']; ?>"><?php echo $zn['name']; ?></option>
	<?php } ?>
	</select>
<?php } else { ?>
	No regions/provinces/states found under that country
<?php } ?>
<?php
mysql_close();
?>