<?php
    /* Fibonaccie Series with simple in php */
    $a = 0;
    $b = 1;
    echo "<h2>This is a Fibonacci series <pre></h2>";
    echo $a,' '.$b,' ';

    while($num < 10){
        /* Take one more variable $n and assign the value of a & b as b+a */
        $c = $b + $a;
        echo $c,' ';
        /* Assign the value of c */
        $a = $b;
        $b = $c;
        $num = $num+1;
    }
?>