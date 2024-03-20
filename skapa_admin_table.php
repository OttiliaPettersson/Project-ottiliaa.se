<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "mysql181.loopia.se";
$username = "ottiliaa@o349406";
$password = "Blomma2023!?";
$dbname = "ottiliaa_se";

$db = new mysqli($servername, $username, $password, $dbname);
 
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "CREATE TABLE IF NOT EXISTS admin (
    id int(11) AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    passcode varchar(255) NOT NULL,
    PRIMARY KEY  (id)
)";
 
$result = $conn->query($sql);
?>