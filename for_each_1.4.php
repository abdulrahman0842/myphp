<?php  
    $a = array();  
    $a[0][0] = "Alex";  
    $a[0][1] = "Bob";  
    $a[1][0] = "Camila";  
    $a[1][1] = "Danny";  
   
 foreach ($a as $e1) {  
        foreach ($e1 as $e2) {  
            echo "$e2\n";  
        }  
    }  
?>  