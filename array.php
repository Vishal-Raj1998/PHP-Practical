<?php include 'includes/header.php'?>
    <h2>Array in php</h2>
<?php
    $numbers=array(1,2,3,4,5,6);
    
    $size=count($numbers);

    for($count=0;$count<$size;$count++){
        echo $numbers[$count];
        echo '<br/>';
    }
?>
</body>
</html>