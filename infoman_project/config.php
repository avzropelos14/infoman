<?php

    $con = mysqli_connect('localhost', 'root', '', 'infoman' , 3305);

    if(!$con){
        die('Connection Failed!'.mysqli_connect_error());
    }else{
        echo '';
    }
?>
