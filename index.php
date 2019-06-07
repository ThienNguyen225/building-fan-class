<?php
include "fan.php";
$fan = new Fan();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fan is on
    if ($_POST["status"] == "On") {
        $status = true;
        $speed = $_POST["speed"];
        $radius = $_POST["radius"];
        $color = $_POST["color"];
        // Check field
        if (empty($radius) || !is_numeric($radius) || empty($color)) {
            echo "Enter Field again! Radius must be a Number and fill the Field";
        } else {
            $fan->setStatus($status);
            $fan->setSpeed($speed);
            $fan->setRadius($radius);
            $fan->setColor($color);
            $fan->toString();
        }
    } // Fan is off
    else {
        $status = false;
        $fan->toString();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Xây dựng lớp Fan</title>
    <style>
        form {
            margin-left: 35%;
        }

        h2 {
            color: blue;
            margin-left: 25%;
        }

        .display {
            width: 360px;
            height: 200px;
            margin: 0;
            padding: 10px;
            border: 2px #dd33dd solid;
        }

        input[type=submit] {
            width: 30%;
            margin-left: 100px;
        }

        select[name=status] {
            width: 100px;
            margin-left: 30px;
        }

        select[name=speed] {
            width: 100px;
            margin-left: 30px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Xây dựng lớp Fan</h2>
        <fieldset>
            <br>Enter Fan's Radius:
            <input type="text" name="radius" placeholder="Enter Fan's Radius" size="30"/>
            <br>Enter Fan's Color:
            <input type="text" name="color" placeholder="Enter Fan's Color" size="30"/>
            <br>Select Fan's Status:
            <select name="status">
                <option value="Off">OFF</option>
                <option value="On">ON</option>
            </select>
            <br>Select Fan's Speed:
            <select name="speed">
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">High</option>
                <option value="4">Another</option>
            </select>
            <br>Display:
            <input type="submit">
        </fieldset>
    </div>
</form>
</body>
</html>