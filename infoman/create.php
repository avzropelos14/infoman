<?php
    include "config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $medical_record = $_POST['medical_record'];
        $blood_type = $_POST['blood_type'];
        $registration_date = $_POST['registration_date'];
        $doctor_in_charge = $_POST['doctor_in_charge'];
        $room_number = $_POST['room_number'];
        $allergies = $_POST['allergies'];

        $con->query("INSERT INTO hospital (name, date_of_birth, gender, contact, blood_type, registration_date, doctor_in_charge, medical_record, room_number, allergies) VALUES ('$name', '$date_of_birth', '$gender', '$contact', '$blood_type', '$registration_date', '$doctor_in_charge', '$medical_record', '$room_number', '$allergies')");
        header('Location: read.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="number" name="contact" placeholder="Contact Number" required>
        <input type="text" name="disease_record" placeholder="Medical Record" required>
        <input type="text" name="blood_type" placeholder="Blood Type" required>
        <input type="date" name="registration_date" required>
        <input type="text" name="doctor_in_charge" placeholder="Doctor in Charge">
        <input type="text" name="room_number" placeholder="Room Number">
        <input type="text" name="allergies" placeholder="Allergies">
        <button type="submit" name="submit">Add Patient</button>
    </form>
</body>
</html>
