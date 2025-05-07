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

        $con->query("INSERT INTO hospital (name, date_of_birth, gender, contact, blood_type, registration_date, doctor_in_charge, medical_record) VALUES ('$name', '$date_of_birth', '$gender', '$contact', '$blood_type', '$registration_date', '$doctor_in_charge', '$medical_record')");
        header('Location: read.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    
</head>
<body>
    <form action="" method="POST">

        <h2>Add a Patient</h2>
        <p>Name: </p>
        <input type="text" name="name" placeholder="Name" required><br>

        <p>Date of birth: </p>
        <input type="date" name="date_of_birth" placeholder="Date of Birth" required><br>

        <p>Gender: </p>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>

        <p>Contact Number: </p>
        <input type="number" name="contact" placeholder="Contact Number" required><br>

        <p>Medical Record: </p>
        <input type="text" name="disease_record" placeholder="Medical Record" required><br>

        <p>Blood Type: </p>
        <input type="text" name="blood_type" placeholder="Blood Type" required><br>

        <p>Registration Date: </p>
        <input type="date" name="registration_date" required><br>

        <p>Doctor in Charge: </p>
        <input type="text" name="doctor_in_charge" placeholder="Doctor in Charge"><br> 


        <button type="submit" name="submit">Add Patient</button>
    </form>
</body>
</html>
