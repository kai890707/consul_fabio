<?php

function http_request($url,$method='GET',$data='')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if(!empty($data)){
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    } 

    $res = curl_exec($ch);
     
    curl_close($ch);

    return $res;
}

?>