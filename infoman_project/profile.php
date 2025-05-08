<?php
include "config.php";
$id = $_GET['id'];
$patient = $con->query("SELECT * FROM hospital WHERE id = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            background-attachment: fixed;
        }

        .profile-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .profile-info strong {
            color: #333;
        }

        .medical-record {
            background: #f9f9f9;
            border-left: 4px solid #007bff;
            padding: 15px;
            white-space: pre-line;
            margin-top: 10px;
            font-family: monospace;
            color: #444;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-link:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="profile-card">
        <h2>Patient Profile</h2>
        <div class="profile-info">
            <p><strong>Name:</strong> <?= $patient['name'] ?></p>
            <p><strong>Date of Birth:</strong> <?= $patient['date_of_birth'] ?></p>
            <p><strong>Gender:</strong> <?= $patient['gender'] ?></p>
            <p><strong>Contact:</strong> <?= $patient['contact'] ?></p>
            <p><strong>Blood Type:</strong> <?= $patient['blood_type'] ?></p>
            <p><strong>Registration Date:</strong> <?= $patient['registration_date'] ?></p>
            <p><strong>Doctor In Charge:</strong> <?= $patient['doctor_in_charge'] ?></p>
            <p><strong>Medical Record:</strong></p>
            <div class="medical-record">
                <?= htmlspecialchars($patient['medical_record']) ?>
            </div>
        </div>
        <a class="back-link" href="read.php">← Back to List</a>
    </div>
</body>

</html>