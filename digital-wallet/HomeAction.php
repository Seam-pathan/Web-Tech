<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body>
	<h1>Form Action</h1>
	<?php
		$Type = $_POST['Type'];
		$person = $_POST['person'];
		$amount = $_POST['amount'];

		if (empty($Type))
		{
			echo "Fill up the type";
		}

		else if (empty($person))
		{
			echo "Fill up, whom you want to send money";
		}
		else if (empty($amount))
		{
			echo "Fill up the amount";
		}
		else {
			echo "Successfully sent";
		}
    ?>