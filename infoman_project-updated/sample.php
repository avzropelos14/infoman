<?php
include "config.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$record = null;
if ($id > 0) {
    $stmt = $con->prepare("SELECT * FROM hospital WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $record = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $blood_type = $_POST['blood_type'];
    $registration_date = $_POST['registration_date'];
    $doctor_in_charge = $_POST['doctor_in_charge'];
    $medical_history = $_POST['medical_history'];
    $allergies = $_POST['allergies'];
    $medications = $_POST['medications'];
    $current_health_status = $_POST['current_health_status'];

    $stmt = $con->prepare("UPDATE hospital SET
        name=?, date_of_birth=?, gender=?, contact=?, blood_type=?,
        registration_date=?, doctor_in_charge=?, medical_history=?, allergies=?, medications=?, current_health_status=?
        WHERE id=?");

    $stmt->bind_param(
        "ssssssssssssi",
        $name, $date_of_birth, $gender, $contact, $blood_type,
        $registration_date, $doctor_in_charge, $medical_history, $allergies, $medications, $current_health_status, $id
    );

    $stmt->execute();
    $stmt->close();

    header("Location: profile.php?id=$id");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Patient Record</title>
</head>
<body>
    <h2>Update Patient Record</h2>
    <a href="read.php">← Back to Record List</a>

    <?php if ($record): ?>
        <form method="POST">
            <input type="text" name="name" value="<?= htmlspecialchars($record['name']) ?>" required>
            <input type="date" name="date_of_birth" value="<?= htmlspecialchars($record['date_of_birth']) ?>" required>

            <select name="gender">
                <option value="Male" <?= $record['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                <option value="Female" <?= $record['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
            </select>

            <input type="number" name="contact" value="<?= htmlspecialchars($record['contact']) ?>" required>
            <input type="text" name="disease_record" value="<?= htmlspecialchars($record['disease_record']) ?>" required>
            <input type="text" name="blood_type" value="<?= htmlspecialchars($record['blood_type']) ?>" required>
            <input type="date" name="registration_date" value="<?= htmlspecialchars($record['registration_date']) ?>" required>
            <input type="text" name="doctor_in_charge" value="<?= htmlspecialchars($record['doctor_in_charge']) ?>" required>

            <textarea name="medical_history" placeholder="Medical History" required><?= htmlspecialchars($record['medical_history']) ?></textarea>
            <textarea name="allergies" placeholder="Allergies" required><?= htmlspecialchars($record['allergies']) ?></textarea>
            <textarea name="medications" placeholder="Medications" required><?= htmlspecialchars($record['medications']) ?></textarea>
            <textarea name="current_health_status" placeholder="Current Health Status" required><?= htmlspecialchars($record['current_health_status']) ?></textarea>

            <button type="submit">Update Record</button>
        </form>
    <?php else: ?>
        <p>Invalid patient ID or patient not found.</p>
    <?php endif; ?>
</body>
</html>
