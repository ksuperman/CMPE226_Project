<?php
$servername = "localhost";
$username = "root";
$password = "sesame";
$dbname = "ONLINESHOPPING";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//subscription
if (isset($_POST['subscription'])) {
	$is_subscription = "YES";
} else {
	$is_subscription = "NO";
}

//contact mode

$contact_mode1 = $_POST["contact_mode"];


$sql = "INSERT INTO USER_DETAILS (FIRST_NAME, LAST_NAME, EMAIL,PASSWORD,USER_ID, DATE_OF_BIRTH,GENDER,ADDRESS,CONTACT_NUMBER,SUBSCRIPTION,CONTACT_MODE)
VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["email"]."', '".$_POST["password"]."','".$_POST["username"]."', '".$_POST["dob"]."','".$_POST["sex"]."','".$_POST["address"]."','".$_POST["phone_number"]."','$is_subscription' ,'$contact_mode1')";



if ($conn->query($sql) === TRUE) {
	header("location: index.php?error=".urlencode("Account created successfully"));
} else {
	header("location: index.php?error=".urlencode($conn->error));
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>