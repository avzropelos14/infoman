<?php
include "config.php";
$id = $_GET['id'];
$record = $con->query("SELECT * FROM hospital WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $medical_record = $_POST['medical_record'];
    $blood_type = $_POST['blood_type'];
    $registration_date = $_POST['registration_date'];
    $doctor_in_charge = $_POST['doctor_in_charge'];

    $con->query("UPDATE hospital SET name='$name', date_of_birth='$date_of_birth', gender='$gender', contact='$contact', medical_record='$medical_record', blood_type='$blood_type', registration_date='$registration_date', doctor_in_charge='$doctor_in_charge' WHERE id=$id");

    header('Location: read.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Patient</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            margin: 0;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #0072ff;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #0072ff;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #005bd1;
        }

        .nav-links {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-links a {
            margin: 0 10px;
            color: #0072ff;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <form class="form-container" method="POST">
        <h2>Update Patient Record</h2>

        <div class="nav-links">
            <a href="read.php">← View Records</a>
            <a href="create.php">+ Add New</a>
        </div>

        <input type="text" name="name" value="<?= $record['name'] ?>" required placeholder="Full Name">
        <input type="date" name="date_of_birth" value="<?= $record['date_of_birth'] ?>" required>
        <select name="gender">
            <option value="Male" <?= $record['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $record['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select>
        <input type="number" name="contact" value="<?= $record['contact'] ?>" required placeholder="Contact Number">
        <textarea name="medical_record" rows="6" placeholder="Medical Record Details" required><?= $record['medical_record'] ?></textarea>
        <input type="text" name="blood_type" value="<?= $record['blood_type'] ?>" required placeholder="Blood Type">
        <input type="date" name="registration_date" value="<?= $record['registration_date'] ?>" required>
        <input type="text" name="doctor_in_charge" value="<?= $record['doctor_in_charge'] ?>" required placeholder="Doctor in Charge">
        <button type="submit" name="submit">Update Record</button>
    </form>
</body>

</html>