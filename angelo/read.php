<?php
include "config.php";
$result = $con->query("SELECT * FROM hospital");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Patient Records</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #A09ABC;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th, td {
            background-color: #f2f2f2;
        }

        .action {
            margin-bottom: 20px;
            display: flex;
            justify-content: end;
            gap: 10px;
        }

        .action button {
            padding: 10px 20px;
            background-color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Hospital Patient Management System</h2>
    <div class="action">
        <a href="create.php">
            <button>Add New Patient</button>
        </a>
        <a href="index.php">
            <button><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
        </a>

    </div>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Registration Date</th>
            <th>Doctor in Charge</th>
            <th>Room Number</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><a href="profile.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></td>
                <td><?= $row['registration_date'] ?></td>
                <td><?= $row['doctor_in_charge'] ?></td>
                <td><?= $row['room_number'] ?></td>

                <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick='return confirm("Are you sure?")'>Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
