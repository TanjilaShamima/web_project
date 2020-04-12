<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";


$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection unsuccessful";
}

else{
	echo "Connection Successful";
}


/*$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_GET['email'];

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";
*/

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$password = $_GET['pass'];
$repassword = $_GET['repass'];




$sql = "INSERT INTO register(firstname, lastname, email, phone, password, repassword)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$password', '$repassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>