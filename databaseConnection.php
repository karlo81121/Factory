<?php

    $dbhost = "localhost";
    $dbusername = "najjaciUser";
    $dbpassword = "ltdh-101fm8112";
    $dbname = "jela";

    $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname) or die("Not able to connect to server.");

    if(mysqli_connect_error()){
        die('Unable to connect ('.mysqli_connect_errno() .') '.mysqli_connect_error());
    }

?>