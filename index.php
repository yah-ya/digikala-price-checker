<?php

include 'curl.php';
$thisSellerId = '';
$productCodes = [
    "7310155"
];

foreach($productCodes as $code){
    doCurl(url:"https://api.digikala.com/v1/product/".$code.'/',callback: function($res) use ($thisSellerId) {
        $res = json_decode($res);
        print $res->data->product->title_fa;
        print  " -> Seller : <b><span style='".($res->data->product->default_variant->seller->id==$thisSellerId ? 'color:green' : 'color:red' )."'>" .$res->data->product->default_variant->seller->title.'</span></b>';
        print " -> Price : " . $res->data->product->default_variant->price->selling_price;
        print "<br />".PHP_EOL;
    });
    sleep(2);
}
