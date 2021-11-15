<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Example</title>
</head>
<body style="background-color: <?php echo $color; ?>;">

	<h1>Login</h1>
    <form action="LogAction.php" method="post">

       Username: <input type="text" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>

       <input type="submit" name="submit">
       </form>

</body>
</html>