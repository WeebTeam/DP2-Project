<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<?php
		include $_SERVER["DOCUMENT_ROOT"]."/template/header.php";
	?>

	<h1>UwU OwO</h1>
	<p>This is Front page of Cafe Shop! my butt</p>

	<?php
		$host = "127.0.0.1";
		$username = "root";
		$password = "";
		$database = "foodsmith";
		
		// Create connection
		$conn = new mysqli($host, $username, $password, $database);
		
		// Check connection
		if (mysqli_connect_error())
		{
			die("Database connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM user";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "User ID: " . $row["userID"] . " User Type: " . $row["userType"] . " Username: " . $row["userName"] . " Password: " . $row["Password"] . "<br/>";
			}
		}
		else
		{
			echo "0 results";
		}
		
		// Close connection (although it is done automatically when script ends
		//$conn->close();
	?>
	
</body>
</html>
