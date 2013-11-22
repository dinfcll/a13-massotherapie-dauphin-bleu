<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-08
 * Time: 23:28
 * To change this template use File | Settings | File Templates.
 */

require_once('./stripe-php-1.9.0/lib/Stripe.php');

$stripe = array(
    "secret_key"      => "sk_test_TkD3AIAdTjIBqUHOr93gfmgS",
    "publishable_key" => "pk_test_9HQgnQHgw0LHFfttnJJcVJ1m"
);

Stripe::setApiKey($stripe['secret_key']);
//sk_test_mkGsLqEW6SLnZa487HYfJVLf
//pk_test_czwzkTp2tactuLOEOqbMTRzG

//
//
?>

