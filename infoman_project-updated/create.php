<?php
include "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $medical_record = $_POST['medical_record'];
    $blood_type = $_POST['blood_type'];
    $registration_date = $_POST['registration_date'];
    $doctor_in_charge = $_POST['doctor_in_charge'];
    $room_number = $_POST['room_number'];

    $query = mysqli_query($con, "INSERT INTO hospital (name, date_of_birth, gender, contact, medical_record, blood_type, registration_date, doctor_in_charge, room_number)
    VALUES ('$name', '$date_of_birth', '$gender', '$contact', '$medical_record', '$blood_type', '$registration_date', '$doctor_in_charge', '$room_number')");

    if ($query) {
        header('Location: read.php');
    } else {
        echo "<script>alert('Error adding patient: " . mysqli_error($con) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient - Asian Medical Clinic</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 20px;
            color: #333;
        }

        .form-container hr {
            border: none;
            height: 2px;
            background: #3498db;
            width: 90%;
            margin: 10px auto 30px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .gender-options {
            display: flex;
            gap: 15px;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            text-align: left;
        }

        button {
            margin-top: 20px;
            padding: 12px;
            width: 100%;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #2c80b4;
        }

        .clinic-logo {
            text-align: center;
            margin-bottom: 10px;
        }

        .clinic-logo img {
            width: 60px;
            vertical-align: middle;
            margin-left: 1px;
        }

        .clinic-logo span {
            font-size: 25px;
            font-weight: bold;
            color: #222;
            margin-left: 5px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
        }

    </style>
</head>
<body>

    <form action="" method="POST" class="form-container">
        <div class="clinic-logo">
            <img src="image.png" alt="Logo">
            <span>Asian Medical Clinic</span>
        <hr>
        </div>
        <h1>Add a Patient</h1>

        <label for="room_number">Room Number</label>
        <input type="text" name="room_number" id="room_number" required>

        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" required>

        <label for="date_of_birth">Date of Birth</label>
        <input type="date" name="date_of_birth" id="date_of_birth" required>

        <label>Gender</label>
        <div class="gender-options">
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female" required> Female</label>
        </div>

        <label for="contact">Contact Number</label>
        <input type="text" name="contact" id="contact" maxlength="11" required>

        <label for="medical_record">Medical Record</label>
        <textarea name="medical_record" id="medical_record" rows="7" required placeholder="">
1. Disease:
2. Symptoms:
3. Treatment:
4. Allergies:
5. Medication:
6. Previous Medical History:
7. Follow-up:
8. Notes:
        </textarea>

        <label for="blood_type">Blood Type</label>
        <select name="blood_type" id="blood_type" required>
            <option value="" disabled selected>Select blood type</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label for="registration_date">Registration Date</label>
        <input type="date" name="registration_date" id="registration_date" required>

        <label for="doctor_in_charge">Doctor in Charge</label>
        <input type="text" name="doctor_in_charge" id="doctor_in_charge" value="Dr. " required>

        <button type="submit" name="submit">Add Patient</button>
    </form>

</body>
</html>