<?php

    $con = mysqli_connect('localhost', 'root', '', 'infoman');

    if($con->connect_error){
        $die('Connection Failed!');
    }else{
        echo '';
    }
?>