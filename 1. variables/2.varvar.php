<?php
    $a = 'hello';
    $$a = 'world';  // $hello = 'world';
    print $hello;
?>