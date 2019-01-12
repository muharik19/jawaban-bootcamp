<?php

    function persegi() {
        
        $jmlbaris = 8;
        $jmlkolom = 5;

        for ($i = 0; $i < $jmlbaris ; $i++) {
            for ($j = 0; $j < $jmlbaris; $j++) {
                if ($i == 0 || $i == $jmlbaris - 1) {
                    echo "*";
                } else {
                    if ($j == 0 || $j == $jmlbaris - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                
                for ($k = 0; $k < 2; $k++) { 
                    echo "&nbsp";
                }
            }

            for ($j = 0; $j < $jmlbaris; $j++) {
                if ($i == 0 || $i== $jmlbaris - 1) {
                    echo "*";
                } else {
                    if ($j == $jmlbaris - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                
                for ($k = 0; $k < 2; $k++) { 
                    echo "&nbsp";
                }
            }
            echo "<br>";
        }
        
        for ($i = 0; $i < $jmlbaris ; $i++) {
            for ($j = 0; $j < $jmlbaris; $j++) {
                if ($i == $jmlbaris - 1) {
                    echo "*";
                } else {
                    if ($j == 0 || $j == $jmlbaris - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                
                for ($k = 0; $k < 2; $k++) { 
                    echo "&nbsp";
                }
            }

            for ($j = 0; $j < $jmlbaris; $j++) {
                if ($i == $jmlbaris - 1) {
                    echo "*";
                } else {
                    if ($j == $jmlbaris - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                
                for ($k = 0; $k < 2; $k++) { 
                    echo "&nbsp";
                }
            }
            echo "<br>";
        }
    }
    echo persegi();
?>
