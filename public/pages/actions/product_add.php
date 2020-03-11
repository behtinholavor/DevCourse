<?php 
	include 'connection.php';

	$code 			= $_POST['edtCode'];
	$description 	= $_POST['edtDescription'];
	$quantity 		= $_POST['edtQuantity'];
	$category 		= $_POST['cbbCategory'];
	$manufacturer 	= $_POST['cbbManufacturer'];

	$sql = "INSERT INTO stock ";
	$sql .= "(code, description, quantity, category, manufacturer, registred, altered) ";
	$sql .= "VALUES ($code, '$description', $quantity, '$category', '$manufacturer', current_timestamp, null);";
	
	//$result = mysqli_query($connection, $sql);	

	if ($connection->query($sql) === TRUE) {
    	$msg = "New record created successfully";   
	} else {
	    $msg = "Error: " . $sql . "<br>" . $connection->error;
	}

	echo '<script language="javascript">';
	echo 'alert("' . $msg . '")';
	echo '</script>';

	echo '<script language="javascript">';
	echo 'showModal()';
	echo '</script>';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DevCourse</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="path-to-javascript-file.js"></script>

		
	</style>
</head>