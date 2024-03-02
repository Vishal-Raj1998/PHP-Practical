<?php 
$title="Conditional Statement ";
include 'includes/header.php'?>
    <h2>If else </h2>
<?php
    echo 'hello';
    $grade=10;
    echo '<br/>';
    if($grade<0){
        print 'greater';
    }
    else{
        print 'negative';
    }
?>
</body>
</html>