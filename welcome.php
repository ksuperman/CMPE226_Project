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

$sql = "SELECT FIRST_NAME, LAST_NAME, EMAIL, USER_ID, DATE_OF_BIRTH, GENDER, ADDRESS, CONTACT_NUMBER FROM USER_DETAILS WHERE USER_ID='".$_GET["username"]."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table border=1><tr><td>FIRST_NAME :</td><td>" . $row["FIRST_NAME"]."</td></tr><tr><td>LAST_NAME : </td><td>". $row["FIRST_NAME"]."</td></tr><tr><td>EMAIL : </td><td>". $row["EMAIL"]."</td></tr><tr><td>USER_ID : </td><td>". $row["USER_ID"]."</td></tr><tr><td>DATE_OF_BIRTH : </td><td>". $row["DATE_OF_BIRTH"]."</td></tr><tr><td>GENDER : </td><td>". $row["GENDER"]."</td></tr><tr><td>ADDRESS : </td><td>". $row["ADDRESS"]."</td></tr><tr><td>CONTACT_NUMBER : </td><td>". $row["CONTACT_NUMBER"]."</td></tr></table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>