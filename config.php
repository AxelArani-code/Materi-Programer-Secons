<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost","axel","43353606","desing");

if($link=== false){
 die("ERROR: ". mysqli_connect_error());
}
?>