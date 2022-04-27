<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function autoload($class){
    $path = str_replace('\\', '/', $class.'.php');
    if(file_exists($path)){
        require $path;
    }
}

function debug($param){
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
    exit();
}

function curl($url, $data)
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 100,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array("Cookie: MoodleSession=susgbb2ukvglltnuu0esv8mic2"                                                            ),
    ));
    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}
