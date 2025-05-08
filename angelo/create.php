<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            background: linear-gradient(350deg, #386fa4, #91E5F6);
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            width: 50vw;
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }

        .container button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h2{
            text-align: center;
        }

        form input,
        form select {
            padding: 10px 5px;
        }

        .logo {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .logo h1 {
            margin: 0;
        }

        hr{
            width: 90%;
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <div class="logo">
                <img src="image.png" alt="Logo" style="width: 50px;">
                <h1 style="text-align: center;">Asian Medical Clinic</h1>
            </div>
            <hr>
            <h2>Add a Patient</h2>
            <p>Room Number: </p>
            <input type="text" name="room_number" placeholder="Room Number" required><br>

            <p>Name: </p>
            <input type="text" name="name" placeholder="Name" required><br>

            <p>Date of birth: </p>
            <input type="date" name="date_of_birth" placeholder="Date of Birth" required><br>

            <p>Gender: </p>
            <div>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
            </div><br>



            <p>Contact Number: </p>
            <input type="text" name="contact" placeholder="Contact Number" maxlength="11" required><br>

            <p>Medical Record: </p>
            <textarea name="medical_record" rows="10" required>
1. Disease:
2. Symptoms:
3. Treatment:
4. Allergies:
5. Medication:
6. Previous Medical History:
7. Follow-up:
8. Notes:
            </textarea><br>

            <p>Blood Type: </p>
            <select name="blood_type">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br>

            <p>Registration Date: </p>
            <input type="date" name="registration_date" required><br>

            <p>Doctor in Charge: </p>
            <input type="text" name="doctor_in_charge" placeholder="Doctor in Charge" value="Dr. "><br>


            <button type="submit" name="submit">Add Patient</button>
        </div>
    </form>

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

        $query = mysqli_query($con, "INSERT INTO `hospital` (`name`, `date_of_birth`, `gender`, `contact`, `medical_record`, `blood_type`, `registration_date`, `doctor_in_charge`, `room_number`) VALUES ('$name', '$date_of_birth', '$gender', '$contact', '$medical_record', '$blood_type', '$registration_date', '$doctor_in_charge', '$room_number')");

        if ($query) {
            header('Location: read.php');
        } else {
            echo "<script>alert('Error adding patient: " . mysqli_error($con) . "');</script>";
        }
    }
    ?>
</body>

</html>
