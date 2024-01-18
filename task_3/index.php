<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $result = "";

    for ($i = 0; $i <= 10; $i++) {
        $result .= $i;
        if($i != 10) {
            $result .= "-";
        }
    }

    echo $result;

?>
</body>
</html>
