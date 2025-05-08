<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
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

        .container a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        <a href="create.php">Add New Record</a>
        <a href="read.php">View Existing Records</a>
    </div>
</body>
</html>
