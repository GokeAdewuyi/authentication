<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body{
            margin: auto;
            display: flex;
            justify-content: center;
        }

        div {
            width: 40%;
            border-radius: 5px;
            padding: 20px;
        }

        input[type=text],
        input[type=password],
        input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div>
    <form action="action.php" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email..">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password..">

        <input type="submit" name="login" value="Submit">
        <p>Don't have an account? <a href="register.html">Register</a></p>
    </form>
</div>
</body>
</html>

<?php
