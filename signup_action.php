<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ONLINESHOPPING";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO USER_DETAILS (FIRST_NAME, LAST_NAME, EMAIL,PASSWORD,USER_ID, DATE_OF_BIRTH,GENDER,ADDRESS,CONTACT_NUMBER)
VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["email"]."', '".$_POST["password"]."','".$_POST["username"]."', '".$_POST["dob"]."','".$_POST["sex"]."','".$_POST["address"]."','".$_POST["phone_number"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Record entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>