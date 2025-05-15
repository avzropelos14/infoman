<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 90%;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: #3498db;
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 180px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        .card:hover {
            background-color: #2c80b4;
            transform: scale(1.05);
        }

        .card i {
            font-size: 30px;
            margin-bottom: 10px;
            display: block;
        }

        @media (max-width: 600px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <h1>Asian Medical Clinic</h1>
        <div class="cards">
            <a href="read.php" class="card">
                <i class="fa-solid fa-users"></i>
                View Patients
            </a>
            <a href="appointment.php" class="card">
                <i class="fa-solid fa-calendar-check"></i>
                View Appointments
            </a>
            <a href="create.php" class="card">
                <i class="fa-solid fa-user-plus"></i>
                Add Patient
            </a>
            <a href="create_appointment.php" class="card">
                <i class="fa-solid fa-calendar-plus"></i>
                Add Appointment
            </a>
            <a href="index.php" class="card" style="background-color: #e74c3c;">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>
        </div>
    </div>
</body>

</html>
