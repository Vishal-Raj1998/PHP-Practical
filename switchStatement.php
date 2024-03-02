<?php

$grade='A ';
switch($grade){
    case 'A':
        echo '<h2 style="color:green">You are passed</h2>';
        break;
    case 'B':
        echo '<h2 style="color:grey">You are Average</h2>';
       
        break;

    default:
        echo '<h2 style="color:red">You are failed</h2>';
        break;
}

?>