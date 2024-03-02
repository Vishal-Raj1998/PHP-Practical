<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>String Manipualtion in php</h2>
<?php
    $phrase1="this IS DEMO";
    $phrase2="class, so you can toy take for two days";
    $name="Vishal Raj";

    echo 'Upper case of first letter: '. ucfirst($phrase1);
    echo "Upper case of each words: ".ucwords($phrase2).'<br/>';
    echo "Upper case: ".strtoupper($name).'<br/>';
    echo "Lower Case: ".strtolower($phrase1);
    echo "SubString : ". substr($name,2,5);
    echo "position of character: ". strpos($phrase2,"take");
    echo "replace the value: ". str_replace("toy","not",$phrase2);
    echo "String length: ". strlen($name);
    echo 'A'.trim(' A B C ').'d';
    echo 'A'.rtrim(' A B C ').'d';
    echo 'A'.ltrim(' A B C ').'d';
?>
</body>
</html>