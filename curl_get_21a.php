<?php
    $location=$_GET['path']; // Get the URL from the user.
    $curl = curl_init($location);
    curl_exec ($curl); 
    curl_close ($curl);
?>


