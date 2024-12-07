<?php
$conn = mysqli_connect('localhost', 'root', '', 'company');
if (isset($_POST["btn"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO employee_data(name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql) == TRUE) {
        echo "Data Inserted";
        header('location:dbconnection.php');
    } else {
        echo "Data not inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border 0.3s;
        }

        .form-container input[type="text"]:focus {
            border-color: #4CAF50;
            background-color: #e8f5e9;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .form-container div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Employee Information</h2>
        <form action="" method="post">
            <div>
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" required>
            </div>
            <div>
                <button type="submit" name="btn">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
