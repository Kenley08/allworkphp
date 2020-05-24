<?php
include_once("./classes/ConnectorBD");
//on teste la base la connection a  la base de de donnees
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}
?>
