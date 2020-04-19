<?php
    header('Access-Control-Allow-Origin: *'); 
    $enquiriesList = file_get_contents('enquiries.json');
    header('Content-Type: application/json');
    echo ($enquiriesList);
?>