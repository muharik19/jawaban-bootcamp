<?php

    function handshake($i)  
    {
        for ($i=0; $i < 6; $i++) { 
            if ($i == 0) {
            return 0;
            } else {
                return ($i - 1) + handshake($i - 1);
            }
        }
    }

    $i = 6;
    echo(handshake($i));

?>
