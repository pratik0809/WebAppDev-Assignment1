<?php

    date_default_timezone_set("America/Chicago");
    $dateForm = date("j M Y - h:i:s A");

    $firstNameErr = "";
    $lastNameErr = "";
    $emailErr = "";

    $firstName = "";
    $lastName = "";
    $email = "";
    $comments = "";

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (empty ($_POST["firstName"])) {
            $firstNameErr = "First Name is required.";
        }
        else {
            $firstName = 'First Name: ' . verify($_POST['firstName']);
        }
        if (empty ($_POST["lastName"])) {
            $lastNameErr = "Last Name is required.";

        }
        else {
            $lastName = 'Last Name: ' . verify($_POST['lastName']);

        }
        if (empty ($_POST["email"])) {
            $emailErr = 'Email Address is required.';

        }
        else {
            $email = 'Email Address: ' . verify($_POST['email']);

        }
        if (empty ($_POST["comments"])) {
            $comments = "";
        }
        else {
            $comments = "Comments: " . verify($_POST['comments']);
        }

        if (empty ($_POST["gender"])) {
            $gender = "";
        }
        else {
            $gender = "Gender: " . verify($_POST['gender']);
        }

    }

    function verify($text) {
        $text = trim($text);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);
        return $text;

    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>form.php - ITMD-462 - Assignment 1 - Pratik Sampat</title>
</head>
<body>


<?php


if (empty($firstNameErr) AND empty($lastNameErr) AND empty ($emailErr) AND ($_SERVER["REQUEST_METHOD"] == 'POST')) {

    echo "<h1>Form - Submitted:</h1>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $comments;
    echo "<br>";
    echo $gender;
    echo "<br><br>";
    echo "<p><strong>Submitted:</strong> $dateForm</p>";


}

else {


?>


<h1>Form</h1>
	<br>

	<form action="form.php" method="POST">
	
		First name*: <input type="text" name="firstName" value="<?php print $_POST['firstName'] ?>">
        <?php print $firstNameErr; ?>
		<br><br>
		Last name*: <input type="text" name="lastName" value="<?php print $_POST['lastName'] ?>">
        <?php print $lastNameErr; ?>
		<br><br>
		Email address*: <input type="email" name="email" value="<?php print $_POST['email'] ?>">
        <?php print $emailErr; ?>
		<br><br>
		Comments: <textarea cols="40" rows="10" name="comments" value=""><?php print $_POST['comments'] ?></textarea>
		<br><br>
		Gender: <input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<br><br>
		<input type="submit">

	
	<?php } ?>


	
	</form>
</body>
</html>