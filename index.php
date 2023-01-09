<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> php-badwords</title>
</head>
<style>
    * {
        background: blue;
        color: bisque;
    }
</style>

<body>

    <h1>
        <?php
        $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit.";

        echo $text;
        ?>
    </h1>

    <h1>
        <?php
        $length = strlen($text);

        echo " text length : " . $length . " characters";
        ?>
    </h1>

</body>

</html>