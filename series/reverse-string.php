<?php
    function reverse($string){
        /* explode value */
        $reverse = explode(" ", $string);

        $newArr = [];
        foreach ($reverse as $r) {
            array_push($newArr, strrev($r));
        }  
        $result = implode(" ", $newArr);
        print_r($result);
    } 
    $string = 'Welcome Devesh Kumar';
    echo '<b>Reverse String is:</b>'.' '.($string);
    echo '<pre>';
    echo '<b>Output:</b>'.' ';
    /* call here to function */
    echo reverse($string);
?>