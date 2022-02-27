<?php

include 'curl.php';
$productCodes = [
    "7310155","5755172","5472330"
];

foreach($productCodes as $code){
    doCurl(url:"https://api.digikala.com/v1/product/".$code.'/',callback: function($res){
        $res = json_decode($res);
        print $res->data->product->title_fa;
        print  " -> Seller : ".$res->data->product->default_variant->seller->title;
        print " -> Price : " . $res->data->product->default_variant->price->selling_price;
        print "<br />".PHP_EOL;
    });
    sleep(2);
}
