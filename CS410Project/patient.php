<?php
    try {
        $db = new PDO("mysql:dbname=EZChart", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $rows = $db->query("SELECT * FROM Employee");
    } catch (PDOException $ex) {
    ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
  <?php } ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Landing Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<h1></h1>
		</header>
		
		<main>
			<form>
				Select a patient:
				<select name="patient">
					<?php foreach($patients as $patient)
					{ ?>
						<option value="<?php $patient ?>"><?php print $patient ?></option><?php ;
					} ?>
				</select>
				<button type="submit" name="newEntry" formaction="newentry.php">New Entry</button>
				<button type="submit" name="viewEntry" formaction="viewentry.php">View Entry</button>
			</form>
		</main>
	</body>
</html>