<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = new mysqli("localhost", "axel", "43353606", "desing");
if ($link->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $link->host_info . "\n";
?>