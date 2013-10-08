<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-13
 * Time: 23:36
 * To change this template use File | Settings | File Templates.
 */
include("header.html");


/*<form method="post" action="validation.php">

    <p>Pr&eacutenom et Nom:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nom" /></p>
    <p>Num&eacutero de t&eacutel&eacutephone: <input type="text" name="Telephone" /></p>
    <p>Ville:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="ville" /></p>
    <p>Adresse couriel: &nbsp;&nbsp;&nbsp;<input type="text" name="couriel" /></p>


<p><input type="submit" name="valider" value="OK"></p>
</form>*/?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>

        Sign in · Twitter Bootstrap

    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!--

     Le styles

    -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <style type="text/css">


        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
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



    </style>
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
<div class="container">
    <form class="form-signin">
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


<!--<table>
    <thead>
    <tr>
        <th>Mon</th><th>Tue</th><th>Wed</th>
        <th>Thu</th><th>Fri</th><th>Sat</th>

        <th>Sun</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td class="padding" colspan="3"></td>
        <td>1</td>

        <td>2</td>
        <td>3</td>
        <td>4</td>
        </tr>
    <tr>
        <td>5</td>

        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>

        <td>11</td>
        </tr>
    <tr>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>

        <td>17</td>
        <td>18</td>
        </tr>
    <tr>
        <td>19</td>
        <td>20</td>
        <td>21</td>

        <td>22</td>
        <td>23</td>

        <td>24</td>
        <td>25</td>
        </tr>
    <tr>
        <td>26</td>
        <td>27</td>
        <td>28</td>

        <td>29</td>
        <td>30</td>
        <td>31</td>
        <td></td>
        </tr>
    </tbody>
    <tfoot>

    <th>Mon</th><th>Tue</th><th>Wed</th>
    <th>Thu</th><th>Fri</th><th>Sat</th>
    <th>Sun</th>
    </tfoot>
    </table>-->



 <link href="calendar.css" type="text/css" rel="stylesheet" />

<?php
include 'calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>








</body>
</html>


