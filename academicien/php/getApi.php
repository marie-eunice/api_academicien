<?php

function getAcademicien($academicien){
   
    
    $url = "http://127.0.0.1:8000/api/academicien ";
    
   

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    return $resp = curl_exec($curl);

    curl_close($curl);
    var_dump($resp);
}

?>