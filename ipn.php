<?php 

header("HTTP/1.1 200 OK");
echo 'hola'; die;
require __DIR__  . '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($_POST["id"]);
        if($payment){
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 404 ERROR");
        }
        break;
    case "plan":
        $plan = MercadoPago\Plan::find_by_id($_POST["id"]);
        if($plan){
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 404 ERROR");
        }
        break;
    case "subscription":
        $plan = MercadoPago\Subscription::find_by_id($_POST["id"]);
        if($plan){
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 404 ERROR");
        }
        break;
    case "invoice":
        $plan = MercadoPago\Invoice::find_by_id($_POST["id"]);
        if($plan){
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 404 ERROR");
        }
        break;
}