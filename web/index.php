<?php
	date_default_timezone_set("America/Chicago");
	$date = date("l F j, Y - h:i:s A");

	if (isset($_GET['name'])) {
			$name = $_GET['name'];
		}
	else {
			$name = 'Guest';
		}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF=8">
	<title>index.php - ITMD-462 - Assignment 1 - Pratik Sampat</title>
</head>
<body>
	<h1>Welcome <?php print $name ?>!</h1>
	<br>
	<h3>ITMD-462-01.15F: Web Site App Development - Assignment 1</h3>
	<h3>Pratik Sampat</h3>
	<h3><a href="form.php">Form.php Link</a></h3>
	<br>
	<h4>Page Loaded: <?php print $date; ?> | EpochSeconds</h4>
</body>
</html>