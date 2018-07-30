<?php
    $orders = array();
    $orders['a'] = 'shirt';
    $orders['b'] = 'trouser';
    $orders['c'] = 'cap';
    
    foreach ($orders as $key1 => $val) {
        print "Key = " . $key1 . " Value = " . $val . "<BR>";
    }
?>