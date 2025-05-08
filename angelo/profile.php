<?php
include "config.php";
$id = $_GET['id'];
$patient = $con->query("SELECT * FROM hospital WHERE id = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Profile</title>
    <style>
        body{
            height: 100vh;
            background: lightblue;
        }

        .container{
            padding: 20px;
            background: white;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <h2>Patient Profile</h2>
    <div class="container">
        <p><strong>Name:</strong> <br> <?= $patient['name'] ?></p><br>
        <p><strong>Date of Birth:</strong><br> <?= $patient['date_of_birth'] ?></p><br>
        <p><strong>Gender:</strong><br> <?= $patient['gender'] ?></p><br>
        <p><strong>Contact:</strong><br> <?= $patient['contact'] ?></p><br>
        <p><strong>Medical Record:</strong><br> <?= $patient['medical_record'] ?><br>
        <p><strong>Blood Type:</strong> <br><?= $patient['blood_type'] ?></p><br>
        <p><strong>Registration Date:</strong><br> <?= $patient['registration_date'] ?></p><br>
        <p><strong>Doctor In Charge:</strong><br> <?= $patient['doctor_in_charge'] ?></p><br>

        <a href="read.php">← Back</a>
    </div>
    
</body>
</html>