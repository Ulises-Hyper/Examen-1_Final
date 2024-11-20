<?php

function ctrlcredits($request, $response, $container){
    $response->setTemplate("credits.php");
    return $response;
}