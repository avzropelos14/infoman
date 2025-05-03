<?php
include "config.php";
$result = $con->query("SELECT * FROM hospital");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Hospital Patient Management System</h2>
<a href="create.php">Add New Patient</a>
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
