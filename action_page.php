<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $fname = htmlspecialchars($_REQUEST['fname']);
    $lname = htmlspecialchars($_REQUEST['lname']);
    if (empty($fname) || empty($lname)) {
        echo "Name and surname are required.";
    } else {
        echo "First Name: $fname<br>Last Name: $lname";
    }
}
?>
<a href="index.html" rel="noopener noreferrer">Go back Home!</a>