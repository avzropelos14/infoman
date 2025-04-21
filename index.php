<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
        <div class="left">
            <div class="admin">
                <div class="admin-left">
                    <img src="images/1.jpg">
                </div>
                <div class="admin-right">
                    <h3>ADMIN</h3>
                    <h3>admin@gmail.com</h3>
                </div>
            </div>
            <div class="bottom">
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
            </div>
        </div>
        <div class="right">
            <h2>Enployee File Information</h2>
            <table border=1>
                <tr>
                    <th>Id Number</th>
                    <th>Employee ID Number</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM employee");

                    while ($row = mysqli_fetch_assoc($query)){
                        $middleInitial = $row['mname'];
                        $index = 0;
                ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><a href="employee.php?ID=<?php echo $row['id'];?>"><?php echo $row['employee_id'];?></a></td>
                        <td><img src="images/<?php echo $row['picture']; ?>.png"></td>
                        <td><?php echo $row['title'];?></td>
                        <td>
                            <p>
                                <?php echo $row['lname']. ", ";?>
                                <?php echo $row['fname']. " ";?>
                                <?php
                                    if (isset($middleInitial[$index])){
                                        echo ucfirst($middleInitial[$index]). ".";
                                    }
                                ?>
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>