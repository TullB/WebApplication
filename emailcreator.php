<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department = $_POST['department'];

$firstPart = substr($firstname, 0, 4);
$lastPart = substr($lastname, 0, 4);

$year = date("y");

$email = strtolower($department . "_" . $firstPart . $lastPart . $year . "@jbu.edu");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Generated Student Email</title>
</head>

<body>

<h2>Admission Successful</h2>

<p>Your generated student email is:</p>

<h3><?php echo $email; ?></h3>

</body>
</html>