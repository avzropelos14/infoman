<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Asian Medical Clinic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
        }

        .container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .container img {
            width: 80px;
            margin-bottom: 10px;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #2e5d9f;
        }

        .container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        .container button {
            width: 100%;
            padding: 12px;
            background: #2e5d9f;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 15px;
        }

        .container button:hover {
            background: #234b84;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="image.png" alt="Clinic Logo">
        <h1>Asian Medical Clinic</h1>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
        </form>

        <div class="footer">© 2025 Asian Medical Clinic</div>
    </div>

    <?php
    $admin_username = "Admin";
    $admin_password = "admin";

    if (isset($_POST['submit'])) {
        $username = ucwords($_POST['username']);
        $password = $_POST['password'];

        if ($username === $admin_username && $password === $admin_password) {
            header("Location: success.php");
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
    ?>
</body>

</html>