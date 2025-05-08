<?php
    include "config.php";
    
    $id = $_GET['id'];
    
    $con->query("DELETE FROM hospital WHERE id=$id");
    header('Location: read.php');
?>