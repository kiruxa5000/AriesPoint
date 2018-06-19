<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 22.02.18
 * Time: 8:58
 */

//$JJ = json_encode($_REQUEST);

function getUrl() {
//    $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
    $url  = 'localhost:8000/course';
//    $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
    $url .= $_SERVER["REQUEST_URI"];
$url = str_replace('/GAK/view.php','',$url);
return $url;
}
echo getUrl();