<?php
    //Null
        $a = null;
        echo $a;
        echo "<br>";
    //Bolean

        $a = true;
        $b = false;

        if ($a) {
            echo "Betul";
        } else {
            echo "Salah";
        }
    echo "<br>"; 
    // Integer

        $a = -3;
        $b = 0;
        $c = 123;
        $d = 0123;
        $e = 0x1010;
        echo $a." ".$b." ".$c." ".$d." ".$e;

        echo "<br>"; 
    // Float
        
        $a = 1.23;
        $b = 10.0;

        echo $a. " ".$b;

        echo "<br>"; 

    // Array
        $a= array(1,2,3);
        $b= ["A", true, 123=>5];

        //echo $a[0]; //1
        //echo $b[0]; //A
        //echo $b[123]; //5
        //echo $b[1234]; //null

        echo $a[0]."<br>".$b[0]."<br>".$b[123]."<br>".$b[1]."<br>";