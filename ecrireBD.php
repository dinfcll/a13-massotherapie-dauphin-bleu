<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-04
 * Time: 15:43
 * To change this template use File | Settings | File Templates.
 */


$cnx = mysql_connect( "localhost", "root", "admin123" );
$db= mysql_select_db( "DauphinBleu" );
$sql = "INSERT INTO commentaire(commentaire) VALUES (\"".$_POST['commentaire']."\") ";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

$data = mysql_fetch_array($req);

mysql_free_result ($req);
mysql_close ();
header ("Refresh: 0;URL=commentaire.php");