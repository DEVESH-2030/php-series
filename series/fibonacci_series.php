<?php
    /* Using Recursion function */
    function Fibonacci_series($n)
    {
        if($n == 0){
            return 0;
        } elseif ($n == 1){
            return 1;
        } else{
            return (Fibonacci_series($n-1) + Fibonacci_series($n-2));
        }
    }
    /* $n is a number */
    $n = 15;
    echo '<h3>This is a Fibbonacci Series :<pre></h3>';
    for($counter = 0 ; $counter < $n; $counter ++)
    {
        echo Fibonacci_series($counter),' ';
    } 
?>