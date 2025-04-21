<?php

    $con = mysqli_connect('localhost', 'root', '', 'infoman_midtermLab');

    if($con->connect_error){
        $die('Connection Failed');
    } else{
        echo '';
    }
?>