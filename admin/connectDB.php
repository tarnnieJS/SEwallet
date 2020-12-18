<?php
$dbconnect = mysqli_connect("localhost", "root", "", "wallet");
if (mysqli_connect_errno($dbconnect)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
