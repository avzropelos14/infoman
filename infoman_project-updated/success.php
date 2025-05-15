<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(145deg, #63b3ed, #91E5F6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #2c3e50;
        }

        .container {
            background: #ffffff;
            border-radius: 12px;
            width: 300px;
            padding: 35px 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-4px);
        }

        h1 {
            font-size: 26px;
            margin-bottom: 25px;
            color: #2c3e50;
        }

        .container a {
            display: block;
            margin: 12px 0;
            padding: 12px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .container a:hover {
            background-color: #2c80b4;
            transform: scale(1.03);
        }

        @media (max-width: 400px) {
            .container {
                width: 85vw;
                padding: 25px 15px;
            }

            h1 {
                font-size: 22px;
            }

            .container a {
                font-size: 15px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome</h1>
        <a href="create.php">➕ Add New Record</a>
        <a href="read.php">📋 View Existing Records</a>
    </div>
</body>

</html>
