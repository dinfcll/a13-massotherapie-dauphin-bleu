<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-08
 * Time: 23:38
 * To change this template use File | Settings | File Templates.
 */

  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];
//$trim = str_replace(","&&".","",$_POST["amount"]);
$money = 100*$_POST["amount"];

  $customer = Stripe_Customer::create(array(
      'email' => $_POST['couriel'],
      'card'  => $token
  ));

  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $money,
      'currency' => 'cad'
  ));

  echo '<h1>Successfully charged '.$_POST["amount"].'$!</h1>';
?>

