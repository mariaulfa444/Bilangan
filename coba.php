<?php 
for ($i = 0; $i < 100; $i++) {
            $x = substr($i,-2,1);
            $y = substr($i,-1,1);
            // echo "$x   ";
            // echo "$y <br>";
            if ($x+$y==7) {
                if ($x > 0) {
                	echo "$i <br>";
                }
            }
} 
?>