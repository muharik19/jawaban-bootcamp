<?php

    function is_valid_password($pwd) {

        $uppercase = preg_match('@[A-Z]@', $pwd);
        $lowercase = preg_match('@[a-z]@', $pwd);
        $number    = preg_match('@[0-9]@', $pwd);

        if(!$uppercase || !$lowercase || !$number || strlen($pwd) <=6 ) {
            echo "password harus lebih dari 8 karakter, mengandung huruf BESAR, huruf kecil dan angka";
        } else {
            echo "is_valid_password(".$pwd.")";
            echo "<hr>";
        }
    }

    echo is_valid_password("qazW_123");

    function is_valid_username($username) {
    
        $uppercase  = preg_match('@[A-Z]@', $username);
        $lowercase  = preg_match('@[a-z]@', $username);
        $underscore = preg_match('/^\w{5,20}$/', $username);
        $number     = preg_match('@[0-9]@', $username);

        if(!$uppercase || !$lowercase || !$number || strlen($username) <=6 ) {
            echo "username harus lebih dari 6 karakter, mengandung huruf kecil dan underscore";
        } else {
            echo "is_valid_username(".$username.")";
        }
    }

    echo is_valid_username("bigboss_");
?>
