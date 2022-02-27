<?php

function doCurl($url,$method='GET',$fields='',$callback=null)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: __auc=ff0607e1174a0482206cedd7f59; _conv_r=s:www.google.com*m:organic*t:*c:; ins-storage-version=208; tracker_global=4FtDfRmS; _gcl_au=1.1.1627772381.1644241606; tracker_session=4FMkxuZl; _gid=GA1.2.1078757697.1645954599; _hjFirstSeen=1; _hjSession_2754176=eyJpZCI6ImRkZjc3NmZjLWU4YzUtNDU2Yy04OGJmLTc0YjlkODhjYWJmOSIsImNyZWF0ZWQiOjE2NDU5NTQ2MDg1MDAsImluU2FtcGxlIjpmYWxzZX0=; _hjAbsoluteSessionInProgress=0; _hjSessionUser_2754176=eyJpZCI6IjM5ZDdlYjE1LTYxZGQtNTE3Zi1iZTYyLTA4YWY2Mjc0MDNhZCIsImNyZWF0ZWQiOjE2NDU5NTQ2MDgzNzksImV4aXN0aW5nIjp0cnVlfQ==; _ga=GA1.2.2017936133.1600416917; _conv_v=vi:1*sc:71*cs:1645954599*fs:1600416923*pv:233*exp:{100024594.{v.1000184260-g.{100022024.1-100022025.1-100022445.1-100022599.1-100022600.1-100022601.1-100023359.1-100023367.1}}-100026246.{v.1000188724-g.{100022024.1-100022025.1}}}*ps:1644924857; _conv_s=si:71*sh:1645954599379-0.9359638172097431*pv:9; TS01e4b47a=0102310591cd7ae365f04af59905d66f4609e6780ae739d691bb4584aeba143238591f34dc7c7351cdd2b6ab858a08d245cfd45324a409fefacfa4fba0581aaa05f7b86969c22e1cff95854773633b806ad12fef39; _ga_4S04WR965Q=GS1.1.1645954594.96.1.1645955106.0; _ga_LR50FG4ELJ=GS1.1.1645954594.24.1.1645955106.60; tracker_global=4FtDfRmS; tracker_session=4FMkxuZl; TS01e4b47a=010231059136ed48d04cef803528e51f6cace3bb0151cd35a3d2a8c6fbc478710666743928c8693d06b7b0f40861df7c09a24a747469d969be7f28cd0bda7eea3f3f47e07f5c5d376d4855009a513f79b69260b696'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    call_user_func($callback,$response);
}
