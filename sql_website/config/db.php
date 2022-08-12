<?php
// Create a connection to mysql

$conn = mysqli_connect('localhost', 'root', '', 'php_sql');

// Check if connected

if(mysqli_connect_errno())
//    If this is true the connection is failed

echo "<h1>Failed to connect to MYSQL mysqli_connect_errno()</h1>"; 



?>