<?php

    $con = mysqli_connect('localhost', 'root', '', 'infoman');

    if(!$con){
        die('Connection Failed!'.mysqli_connect_error());
    }else{
        echo '';
    }
?>
