<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        body {
            /* linear-gradient(315deg, #76e0ff, #5252ff) !important */
            background: linear-gradient(315deg, #76e0ff, #5252ff) !important;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 !important;
        }

        .container {
            background: white;
            border-radius: 10px;
            width: 25vw !important;
            text-align: center;
        }

        .container input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container i {
            color: rgb(255, 0, 0);
            font-size: 50px;
        }

        .container img {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="image.png">
        <h1>Asian Medical Clinic</h1>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Login</button>
        </form>
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
            echo `<script>alert('Invalid username or password');</script>`;
        }
    }
    ?>
</body>

</html>
