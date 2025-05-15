<?php
include "config.php";

// Example: Retrieve appointment data (replace with your actual table if different)
$result = $con->query("SELECT * FROM appointments ORDER BY appointment_date ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Appointments</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            padding: 40px;
            color: #2c3e50;
            background-attachment: fixed;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .action {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-bottom: 20px;
        }

        .action a button {
            padding: 10px 20px;
            background-color: #3498db;
            border: none;
            color: white;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action a button:hover {
            background-color: #2c80b4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
        }

        th {
            background-color: #5dade2;
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #eaf2f8;
        }

        .no-appointments {
            text-align: center;
            padding: 20px;
            font-size: 18px;
            color: #888;
        }
    </style>
</head>

<body>
    <h2>Patient Appointment Schedule</h2>

    <div class="action">
        <a href="create_appointment.php">
            <button><i class="fa-solid fa-calendar-plus"></i> New Appointment</button>
        </a>
        <a href="dashboard.php">
            <button><i class="fa-solid fa-arrow-left"></i> Back to Dashboard</button>
        </a>
    </div>

    <?php if ($result && $result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Doctor</th>
                    <th>Appointment Date</th>
                    <th>Time</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['patient_name'] ?></td>
                        <td><?= $row['doctor_name'] ?></td>
                        <td><?= $row['appointment_date'] ?></td>
                        <td><?= $row['appointment_time'] ?></td>
                        <td><?= $row['reason'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="no-appointments">No appointments scheduled.</div>
    <?php endif; ?>
</body>

</html>
