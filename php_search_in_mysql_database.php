<?php

	if(isset($_POST['search']))
	{
		$id = $_POST['id'];

	 	$connect = mysqli_connect("localhost", "root", "Password", "demodb");

		$query = "SELECT `email`, `city`, `state` FROM `users` WHERE `id` = $id LIMIT 1";
		
		$result = mysqli_query($connect, $query);

		if (mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_array($result)) {
				$email = $row['email'];
				$city = $row['city'];
				$state = $row['state'];
			}
		} else {
			$email = "NA";
			$city = "NA";
			$state = "NA";
		}
	mysqli_free_result($result);
	mysqli_close($connect);
	} else {
		$email = "NA";
		$city = "NA";
		$state = "NA";
	}
	
?>

<!Doctype html>
<html>
	<head>
		<title>PHP Find Data</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<form action="php_search_in_mysql_database.php" method="post">
		id: <input type="text" name="id"><br><br>
		email: <input type="text" name="email" value="<?php echo $email;?>"><br><br>
		city: <input type="text" name="city" value="<?php echo $city;?>"><br><br>
		state: <input type="text" name="state" value="<?php echo $state;?>"><br><br>
		<input type="submit" name="search" value="Find">
	</form>
</html>