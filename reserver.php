<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-09
 * Time: 09:19
 * To change this template use File | Settings | File Templates.
 */
$date = $_GET['date'];
$cnx = mysql_connect( "localhost", "equipe6", "equipe6abc" );
$db= mysql_select_db( "a13equipe6" );
$sql = "INSERT INTO `reserver`(`nom`, `telephone`, `ville`, `mail`, `date`, `etat`) VALUES (\"".$_POST['Nom']."\",\"".$_POST['telephone']."\",\"".$_POST['Ville']."\",\"".$_POST['couriel']."\",\"".$date."\",\"reserver\")";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

$data = mysql_fetch_array($req);

mysql_free_result ($req);
mysql_close ();
header ("Refresh: 0;URL=horaire.php");