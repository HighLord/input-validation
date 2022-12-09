<?php

//This is the default page we show when navigating to a wrong end point or when we dont want a random user accessing a specific endpoint

$response = array(
    "status"=>"404",      
    "data"=>"unknown endpoint"
);
die(json_encode($response));
