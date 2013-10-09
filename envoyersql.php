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
$sql = "UPDATE commentaire SET texte=\"".$_POST['commentaire']."\" WHERE page=$ID; ";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

$data = mysql_fetch_array($req);

echo $data['texte'];
mysql_free_result ($req);
mysql_close ();
header ("Refresh: 5;URL=CKEditor");