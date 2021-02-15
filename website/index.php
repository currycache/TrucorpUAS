<?php
$connect = new mysqli("172.19.0.2", "root", "superpassword", "Trucorp");

$sql = "SELECT * FROM users";
$res = $connect->query($sql);

if($res->num_rows > 0) {
while ($row  = $res->fetch_assoc()) {
echo $row['ID']; 
echo "|";
echo $row['Nama'];
echo "|";
echo $row['Kantor'];
echo "   #   ";

}
}
$connect->close();

?>
