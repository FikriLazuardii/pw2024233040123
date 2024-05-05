<?php 

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "Fikri" && $_POST["password"] == "irkif") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vh;
            color: white;
            margin: auto;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: black;
            width: 80%;
            height: 80%;
            font-size: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: white;
            margin: 10px;
        }

        input {
            margin-top: 10px;
            border: 1px white solid;
            width: 250px;
            height: 40px;
            border-radius: 20px;
        }

        button {
            margin: 0 auto;
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            border: 1px solid black;
        }

        p {
            color: red;
        }

        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-size: cover;
            background-position-x: -150vh;
            border: 2px solid white;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="content">
        <div class="profile"></div>
                <h2>Login</h2>
            <?php if (isset($error)) : ?>
               <p>Incorrect Username/Password</p></h4>
            <?php endif; ?>
            <form action="" method = "post">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>