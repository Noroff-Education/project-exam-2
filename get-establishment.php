<?php
header('Access-Control-Allow-Origin: *'); 
// header('Content-Type: application/json');

$establishmentsList = file_get_contents('establishments.json');

$json = json_decode($establishmentsList);

if(!isset($_GET['id'])) {
    echo null;
    die();
}

$id = $_GET['id'];

foreach($json as $item)
{
    if($item->id == $id)
    {
        echo json_encode($item);
    }
}

?>