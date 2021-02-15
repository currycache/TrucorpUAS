<?php
$connect = new musqli("172.19.0.2", "root", "superpassword", "Trucorp");

$sql = "SELECT * FROM users";
$result = $connect->query($sql);
echo "total data = ";
echo ($result->num_rows);

$connect->close();

?>
