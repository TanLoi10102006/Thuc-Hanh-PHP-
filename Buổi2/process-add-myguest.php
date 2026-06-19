<?php
require_once 'dbcon.php';
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$lastname', '$firstname', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "Success";
} else {
    echo "Fail";
}
mysqli_close($conn);
