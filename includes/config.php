<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'aboutme';

    $con = mysqli_connect("$servername", "$username", "$password", "$dbname");
    if($con){
    }
    else{
        echo "Baal";
    }

?>