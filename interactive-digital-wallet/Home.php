<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page 1 [Home]</title>
</head>
<body>
	<h1>Digital Wallet</h1>

	<form action="HomeAction.php" method="post">
	<a href="Home.php">1.Home</a>
	<a href="add-beneficiary.php">2.Add Beneficiary</a>
	<a href="tansaction-history".php>3.Tansaction History</a>
	
	<script src="signupformvalidation.js"></script>

	<h2>Fund Transfer</h2>

	Select Category: 
		<select name="catetgory">
			<option value="" disabled="disabled">Select a value</option>
			<option value="Send Money">Send Money</option>
			<option value="Mobile Recharge">Mobile Recharge</option>
		</select>
		<br><br>

    TO:
    <select name="name">
			<option value="" disabled="disabled">Select a value</option>
			<option value="seam">seam</option>
			<option value="aqib">aqib</option>
			<option value="joy">joy</option>
		</select>
		<br><br>

	<label for="amount">Amount:</label>
	<input type="number" id="amount" name="amount" min="1" max="10000">
	<br><br>

	<label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone">
	    <br><br>

	<input type="submit" name="submit">
	</form>


</body>
</html>