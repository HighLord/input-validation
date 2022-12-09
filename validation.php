<?php
//This prevents a user from hotlinking directly to this page.
if (count(get_included_files()) == 1) {
    require_once '../index.php';
    die();
}

require_once 'banned.php';

function validate($datas)
{
    try
    {
        if (preg_match('/' . PROHIBITED_CHARACTERS . '/i', $datas, $matches))
        {
            $items = $matches[0];
            $response = array(
            "Status"=>"403",      
            "data"=>"This request was blocked by the security rules. use of $items"
            );
            die(json_encode($response));
        }
    }
    catch (Exception $e)
    {
       $response = array(
        "Status"=>"500",      
        "data"=>"A server error has occurred, Please try again"
        );
        die(json_encode($response));
    }
$datas = trim($datas);
$datas = stripslashes($datas);
$datas = htmlspecialchars($datas);
$datas = htmlentities($datas);
return $datas;
}
