<?php
	$db = new PDO("mysql:dbname=ez_chart", "root");
	$username = $_GET["username"];
	print $username;
	$result = $db->prepare("SELECT * FROM user WHERE user_type = $username");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Database Functions</title>
		<meta charset="utf-8">
	</head>
	<body>
		<header>
			<h1>Welcome:</h1>
		</header>
		
		<main>
			<?php
				foreach ($result as $row) {
			  ?>
			  <li> First name: <?= $row["username"] ?>,
				   Last name:  <?= $row["user_type"]  ?> </li>
			  <?php
			}
			
			?>
		</main>
	</body>
</html>