<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="functions.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x">
        <label for="">y:</label>
        <input type="text" name="y">
        <label for="">z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form> -->

    <form action="mathfunctions.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calc">
    </form>
</body>
</html>


<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];

    // $total = null;
    // echo $x;

    // $total = abs($x); 절댓값
    // $total = round($x); 반올림
    // $total = floor($x); 내림
    // $total = ceil($x); 올림
    // $total = pow($x, $y); 제곱
    // $total = sqrt($x); 제곱근
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(x, y); int or x ~ y
    // $total = max($x, $y, $z);
    // echo $total;

    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);


    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {$area}cm^2 <br>";
    echo "Volume = {$volume}cm^3 <br>";


    
?>