<?php
    $referrer = $_SERVER['HTTP_REFERER'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    
    print "Referrer = " . $referrer . "<BR>";
    print "Browser = " . $browser . "<BR>";
    print "IP Address = " . $ipAddress;
?>