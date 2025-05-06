<?php
    include "config.php";
    
    $id = $_GET['id'];
    
    $con->query("DELETE FROM hospital WHERE id=$id");
    header('Location: read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Patient Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Record deleted successfully.</h2>
    <a href="read.php">Back to Patient List</a>

</body>
</html>