<?php
include "tansaction-historyAction.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page 3 [Tansaction History]</title>
</head>
<body>
	<h1>Digital Wallet</h1>
	<form action="" method="post">
	<a href="Home.php">1.Home</a>
	<a href="add-beneficiary.php">2.Add Beneficiary</a>
	<a href="tansaction-history".php>3.Tansaction History</a>
	<br><br>

	<lable>From:</lable>
    <input type="date" name="from">

    <lable>To:</lable>
    <input type="date" name="to">

    <br><br>
    <input type="submit" name="search">

	<?php
	$q=mysqli_query($db,"SELECT * FROM dwallet WHERE name='seam'");
	$row =mysqli_fetch_array($q);
	?>

    <table border="1">
    	<thead>
    		<tr>
    			<th>Transaction Category</th>
    			<th>To</th>
    			<th>Amount</th>
    			<th>Transferred On</th>
    		</tr>
			<tbody>
			       <?php
						echo "<tr>";
						    echo "<td>";
							echo $row['catetgory'];
							echo "</td>";
							echo "<td>";
							echo $row['phone'];
							echo "</td>";
							echo "<td>";
							echo $row['amount'];
							echo "</td>";
							echo "<td>";
							echo $row['name'];
							echo "</td>";
						echo "</tr>";
				   ?>
			</tbody>
    	</thead>
	</table>
</from>
</body>
</html>