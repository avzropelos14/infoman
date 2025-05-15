<?php
include "config.php";
$result = $con->query("SELECT * FROM hospital");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Records</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            padding: 40px;
            color: #2c3e50;
            background-attachment: fixed;
        }

        h2 {
            text-align: center;
            color:rgb(10, 43, 65);
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
            background-color: #1abc9c;
            border: none;
            color: white;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action a button:hover {
            background-color: #16a085;
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

        td a {
            color: #2980b9;
            text-decoration: none;
            font-weight: 500;
        }

        td a:hover {
            text-decoration: underline;
        }

        .actions a {
            margin-right: 10px;
            color: #2c3e50;
            font-weight: bold;
        }

        .actions a:hover {
            color: #c0392b;
        }

        .fa-arrow-right-from-bracket {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <h2>Hospital Patient Management System</h2>

    <div class="action">
    <a href="create.php">
        <button><i class="fa-solid fa-user-plus"></i> Add Patient</button>
    </a>
    <a href="appointment.php">
        <button><i class="fa-solid fa-calendar-check"></i> Patient Appointment</button>
    </a>
    <a href="index.php">
        <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
    </a>
</div>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Registration Date</th>
                <th>Doctor in Charge</th>
                <th>Room Number</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><a href="profile.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></td>
                    <td><?= $row['registration_date'] ?></td>
                    <td><?= $row['doctor_in_charge'] ?></td>
                    <td><?= $row['room_number'] ?></td>
                    <td class="actions">
                        <a href="update.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick='return confirm("Are you sure?")'>
                            <i class="fa-solid fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>
