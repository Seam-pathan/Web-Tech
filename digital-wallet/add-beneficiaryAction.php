<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body>
	<h1>Form Action</h1>
	<?php 
		$bname = $_POST['bname'];
		$phone = $_POST['phone'];

		if (empty($bname))
		{
			echo "Fill up the name";
		}
		else if (empty($phone))
		{
			echo "Fill up the phone number";
		}
		else {
			$bname = sanitize($bname);
			$phone = sanitize($phone);

			$handle1 = fopen("Data.json", "a");

			$arr1 = array('bname' => $bname, 'phone' => $phone);

         $encode = json_encode($arr1);
		     $res = fwrite($handle1, $encode ."\n");
		     if ($res) {
				echo "Successfully saved";
			}
			else {
				echo "Error while saving";
			}
		}

		function sanitize($data) 
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

</body>
</html>