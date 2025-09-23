<?php
    $u_name = "rs_20292025";
    $u_pass = "revsite";
    $server = "localhost:3306";
    $db = "review_site_20292025";

    $conn = new mysqli($server, $u_name, $u_pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>