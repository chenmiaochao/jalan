<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With");
    header("Content-type: application/xml; charset=UTF-8"); 


    $url = "http://jws.jalan.net/APICommon/AreaSearch/V1/?key=";

    if(empty($_GET)){
        //hotal api url
        // $url = "http://jws.jalan.net/APILite/HotelSearch/V1/?key=";
        //area api url
        $url = "http://jws.jalan.net/APICommon/AreaSearch/V1/?key=";

    }else if(array_key_exists('reg', $_GET)){
        // $url = "http://jws.jalan.net/APICommon/AreaSearch/V1/?key=";
        $reg = '&reg='.$_GET['reg'];
        $url = "$url"."$reg";

    }else if(array_key_exists('pref', $_GET)){

        // $url = "http://jws.jalan.net/APICommon/AreaSearch/V1/?key=";
        $pref = '&pref='.$_GET['pref'];
        $url = "$url"."$pref";
        
    }else if(array_key_exists('larea', $_GET)){

        // $url = "http://jws.jalan.net/APICommon/AreaSearch/V1/?key=";
        $l_area = '&l_area='.$_GET['larea'];
        $url = "$url"."$l_area";
        
    }else if(array_key_exists('sarea', $_GET)){

        $s_area = '&s_area='.$_GET['sarea'];
        $url = "http://jws.jalan.net/APILite/HotelSearch/V1/?key=".$s_area;

       
    }

    $xml = file_get_contents($url);
    echo $xml;
?>