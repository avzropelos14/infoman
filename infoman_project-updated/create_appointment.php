<?php
include "config.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = $_POST['patient_name'];
    $doctor_name = $_POST['doctor_name'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $reason = $_POST['reason'];

    $stmt = $con->prepare("INSERT INTO appointments (patient_name, doctor_name, appointment_date, appointment_time, reason) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $patient_name, $doctor_name, $appointment_date, $appointment_time, $reason);
    $stmt->execute();

    // Redirect to appointment schedule page after submission
    header("Location: appointment.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Appointment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            padding: 40px;
            color: #2c3e50;
            background-attachment: fixed;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        textarea {
            resize: vertical;
        }

        .buttons {
            margin-top: 25px;
            display: flex;
            justify-content: space-between;
        }

        .buttons button, .buttons a {
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }

        .submit-btn {
            background-color: #1abc9c;
            color: white;
        }

        .submit-btn:hover {
            background-color: #16a085;
        }

        .back-btn {
            background-color: #95a5a6;
            color: white;
        }

        .back-btn:hover {
            background-color: #7f8c8d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Schedule New Appointment</h2>
        <form method="POST" action="">
            <label for="patient_name">Patient Name</label>
            <input type="text" name="patient_name" id="patient_name" required>

            <label for="doctor_name">Doctor Name</label>
            <input type="text" name="doctor_name" id="doctor_name" required>

            <label for="appointment_date">Appointment Date</label>
            <input type="date" name="appointment_date" id="appointment_date" required>

            <label for="appointment_time">Appointment Time</label>
            <input type="time" name="appointment_time" id="appointment_time" required>

            <label for="reason">Reason / Notes</label>
            <textarea name="reason" id="reason" rows="3" required></textarea>

            <div class="buttons">
                <button type="submit" class="submit-btn"><i class="fa-solid fa-calendar-plus"></i> Schedule</button>
                <a href="appointment.php" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
