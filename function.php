<?php include 'includes/header.php'?>
    <h2>Function in PHP</h2>
<?php
    function message(){
        echo "You are welcome";
    }
    message();
    echo '<hr/>';
    function sum($num1, $num2){
        $s=$num1+$num2;
        echo "sum of $num1 and $num2 is $s";
        return $s;
    }
   $s= sum(100,120);
   echo $s;
?>
</body>
</html>