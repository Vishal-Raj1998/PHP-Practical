<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Date Manipulation in PHP</h2>
<?php
    $date=getdate();
    echo $date['mday']. "/".$date['month']."/".$date['year'].'<br/>';
    date_default_timezone_set("Asia/Kolkata");
    echo date("m/d/y h:i:s a",time()).'<br/>';
    echo date("j F Y, \a\\t g:i a",time());
?>
</body>
</html>