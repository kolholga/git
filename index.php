<?php

$title = 'my test page';
$name = "Olga";
$birth = "24.04.1979";

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
</head>
<body>
    <h1>Title</h1>
    <p>My name: <?=$name;?></p>
    <p>My birthday: <?=$birth;?></p>
</body>
</html>