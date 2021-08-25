<?php 
    /* using recursive function */
    function search($a,$b){
        /* convert upper to lower case  */
        $val_a = strtolower($a);        
        $val_b = strtolower($b);

        /*split value */
        $split_a = str_split($val_a);     
        $split_b = str_split($val_b);   
        
        /* sort the value a & b which splited*/  
        asort($split_a);
        asort($split_b);
        
        /* combine / join value both a & b */       
        $implode_a = implode($split_a);
        $implode_b = implode($split_b);

        /* check here */
        if ($implode_a == $implode_b) {
            return true;
        } else {
            return false;
        }
    }
    /* defined here a & b */
    $a = "Life";
    $b = "File";
    echo '<b>Input String is:</b>'.' '.($a.', '.$b);
    echo '<pre>';
    echo 'Output:';
    /* call here to function */
    echo search($a,$b);
?>