<?php

    $con = mysqli_connect('localhost', 'root', '', 'infoman_project');

    if($con->connect_error){
        $die('Connection Failed!');
    }else{
        echo '';
    }
?>