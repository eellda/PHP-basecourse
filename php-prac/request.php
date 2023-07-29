<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request.php" method="post">
    <label for="">username:</label><br>
    <input type="text" name="username"><br>
    <label for="">password:</label><br>
    <input type="text" name="password"><br>
    <input type="submit" value="login">
    </form>
</body>
</html>



<?php
// $_GET, $_POST
// <form><form action="filename.php" method="get>

// GET = Data is appended to the url
//       Not SECURE
//       char limit
//       GET requests can be cached
//       Better for a search page

// POST = Data is packaged inside the body of the HTTP request
//       More SECURE
//       no data limit
//       Cannot bookmark
//       GET requests are not cached
//       Better for submitting credentials

// echo $_GET["username"] . "<br>";
// echo $_GET["password"] . "<br>";
// echo "{$_GET["username"]} <br>";
// echo "{$_GET["password"]} <br>";
echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";

?>