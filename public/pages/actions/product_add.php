<?php 
	require "../../../session.php";

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
    	$msg = "Produto inserido com sucesso!";   
    	flash('message', $msg, 'success');	
	} else {
	    $msg = "Error: " . $sql . "<br>" . $connection->error;
	    flash('message', $msg);	
	}

	redirectToHome();
 ?>