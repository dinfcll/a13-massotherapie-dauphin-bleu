<?php

include("header.html");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>

    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!--

     Le styles

    -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <style type="text/css">


        body {
            padding-top: 40px;
            padding-bottom: 40px;
            /*background-color: #f5f5f5;*/
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .patate {
            display: inline-block;
        }



    </style>
    <div class="container">
    <link rel="stylesheet" href="../assets/css/bootstrap-responsive.css"/>
    <!--

     HTML5 shim, for IE6-8 support of HTML5 elements

    -->
    <!--

            [if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]

            -->
    <!--

     Fav and touch icons

    -->
    <link href="../assets/ico/apple-touch-icon-144-precomposed.png" sizes="144x144" rel="apple-touch-icon-precomposed">
    <link href="../assets/ico/apple-touch-icon-114-precomposed.png" sizes="114x114" rel="apple-touch-icon-precomposed"/>
    <link href="../assets/ico/apple-touch-icon-72-precomposed.png" sizes="72x72" rel="apple-touch-icon-precomposed">
    <link href="../assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed"/>
    <link href="../assets/ico/favicon.png" rel="shortcut icon">
</head>
<body>
<?php $date = $_GET['date'] ?>
<div class="patate">

<div class="container">
    <form class="form-signin" action="reserver.php?date=<? echo $date ?>" method="POST">
        <h2 class="form-signin-heading">

            Information

        </h2>
        <input class="input-block-level" type="text" name="Nom" placeholder="Prénom et Nom"/>
        <input class="input-block-level" type="text" name="telephone" placeholder="Numéro de téléphone"/>
        <input class="input-block-level" type="text" name="Ville" placeholder="Ville"/>
        <input class="input-block-level" type="text" name="couriel" placeholder="Adresse couriel"/>

        <button class="btn btn-large btn-primary" name="reserver" type="submit">

            R&eacuteserver

        </button>
    </form>
</div>
<!--

 /container

-->
<!--

 Le javascript
    ==================================================

-->
<!--

 Placed at the end of the document so the pages load faster

-->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap-transition.js"></script>
<script src="../assets/js/bootstrap-alert.js"></script>
<script src="../assets/js/bootstrap-modal.js"></script>
<script src="../assets/js/bootstrap-dropdown.js"></script>
<script src="../assets/js/bootstrap-scrollspy.js"></script>
<script src="../assets/js/bootstrap-tab.js"></script>
<script src="../assets/js/bootstrap-tooltip.js"></script>
<script src="../assets/js/bootstrap-popover.js"></script>
<script src="../assets/js/bootstrap-button.js"></script>
<script src="../assets/js/bootstrap-collapse.js"></script>
<script src="../assets/js/bootstrap-carousel.js"></script>
<script src="../assets/js/bootstrap-typeahead.js"></script>


 <link href="calendar.css" type="text/css" rel="stylesheet" />

<?php
include 'calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>
    <table class=tb>
        <tr><td class="carre" style="background-color:#ff0000"></td><td>R&eacute;serv&eacute;</td></tr>
        <tr><td class="carre" style="background-color:#DDD"></td><td>Libre</td></tr>
        <tr><td class="carre" style="background-color:#787878"></td><td>Non disponible</td></tr>
    </table>

    <style>
        .carre {
            width:20px;
            height:20px;
        }
        .tb {
            background-color:#ffffff;
            margin: 10px;
            border-style:solid;
            border-width:1px;
        }
    </style>

</div>
</div>
</body>
</html>


