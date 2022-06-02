<?php
$conn = new mysqli("localhost","root","","jtmk");

if ($conn->connect_error){
    die ("Connection Failed : ". $conn->connect_error);
}
else echo 'Connection Successful';
echo "<br>";

?>