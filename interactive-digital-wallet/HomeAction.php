<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body>
	<h1>Form Action</h1>
	<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if($conn->connect_error)
		{
			die('Connection Failed : '.$conn->connect_error);
		}
		$sql = "INSERT INTO dwallet (catetgory, name, amount, phone)
		 values(?, ?, ?, ?)";
	
	    $catetgory = $_POST['catetgory'];
	    $name = $_POST['name'];
	    $amount = $_POST['amount'];
	    $phone = $_POST['phone'];

		$stmt= $conn->prepare($sql);
		$stmt->bind_param("ssis", $catetgory, $name, $amount, $phone);
        $res = $stmt->execute();
		if($res){
		echo "successfully.....";
		}
		else{
			echo "Failed";
		}
		$conn->close();
	}
	?>
</body>
</html>