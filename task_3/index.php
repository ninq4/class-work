<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul class="list">

<?php

    for ($i = 0; $i < 100; $i++) {
        if($i < 10){
            echo '<li class = "item">' .'0' . $i . ','. '</li>';
        }else if ($i == 99){
            echo '<li class = "item">' . $i . '</li>';
        }else{
            echo '<li class = "item">' . $i . ',' . '</li>';
        }

        
    }


?>
</ul>
</body>
</html>
