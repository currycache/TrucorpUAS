<?php
$connect = new mysqli("172.19.0.2", "root", "superpassword", "Trucorp");

$sql = "SELECT * FROM users";

$result = $connect->query($sql);
echo "total data adalah = ";
echo ($result->num_rows);
$connect->close();

?>
