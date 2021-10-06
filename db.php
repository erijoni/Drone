<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbssname = "drone";

 $connection1 = new mysqli($servername, $username, $password, $dbssname);
if ($connection1->connect_error) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>