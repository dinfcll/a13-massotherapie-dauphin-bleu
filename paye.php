<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-08
 * Time: 23:03
 * To change this template use File | Settings | File Templates.
 */
//<script type="text/javascript" src="fancybox/jquery-1.4.3.min.js"></script>
require_once('./config.php'); ?>

<form action="charge.php" method="post">

    Amount:<input class="text" name="amount">$<br/><br/>
    Adresse hotmail:<input type="text" name="couriel" /><br/><br/>
    <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
            data-key="<?php echo $stripe['publishable_key']; ?>"
             data-description="Payment"></script>
</form>

<!--data-amount="5000"-->

<!--<form method="post" action="validation.php">-->
<!---->
<!--    <p>Nom d'utilisateur: <input type="text" name="nom" /></p><br/>-->
<!--    <p>Adresse couriel : <input type="text" name="couriel" /></p>-->
<!---->
<!---->
<!---->
<!--    <p><input type="submit" name="valider" value="OK"></p>-->
<!--</form>-->