<?php
    $location=$_GET['path']; // Get the URL from the user.
    $curl = curl_init($location);
    curl_setopt ($curl, CURLOPT_POST, 1);
    curl_setopt ($curl, CURLOPT_POSTFIELDS, $_GET['param']);
    curl_setopt ($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_exec ($curl); 
    curl_close ($curl);
?>


