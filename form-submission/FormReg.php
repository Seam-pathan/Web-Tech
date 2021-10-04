<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Example</title>
</head>
<body>
	<h1>Register form</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		Enter your Name:* <input type="text" name="firstname">
		<br>
		<br>
		Gender: 
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other
		<br>
		<br>
		<lable>Date of Birth:</lable>
        <input type="date" name="dob">
        <br><br>

        <lable>Religion:</lable>
        <select name="Religion">
			<option value="islam">Islam</option>
			<option value="christianity">Christianity</option>
			<option value="hinduism">Hinduism</option>
			<option value="buddhism">Buddhism</option>
		</select>
		<br><br>

		






	<h2>Contact Information</h2>

	    <label for="Present Address">Present Address:</label>
	    <textarea id="Present Address"></textarea>
	    <br><br>

	    <label for="Permanent Address">Permanent Address:</label>
	    <textarea id="Permanent Address"></textarea>
	    <br><br>

	    <label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
	    <br><br>


	   <lable>Enter your email:</lable>
       <input type="email" name="email">
       <br><br>

       <label for="Personal Website Link">Personal Website Link:</label>
       <a href="https://github.com/Seam-pathan">link text</a>
       <br><br>

    <h2>Account Information</h2>

       Username: <input type="text" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>


       <input type="submit" name="submit">
       <br><br>


       <?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$fname = $_POST['firstname'];
			$gen = $_POST['gender'];

			if (empty($fname)) {
				echo "Please fill up the form properly";
			}
			else if (empty($gen)) {
				echo "Please fill up the form properly";
			}
			else if (empty($gen)) {
				echo "Please fill up the form properly";
			}
			else {
				echo "<h1>Output :</h1>";
				/*echo "<h1>[\$_POST] :</h1>";
				echo "<hr>";
				var_dump($_POST);
				echo "<br><br>";*/
				echo "Name: " . sanitize($fname);
				echo "<br><br>";
				echo "Gender: " . sanitize($gen);
			}
		} 

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>



</body>
</html>