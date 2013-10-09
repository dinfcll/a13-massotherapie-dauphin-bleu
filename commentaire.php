<?php include("header.html");?>

    <div class="container">
        <br/>
        <br/>

<form method="POST" action="commentaire.php">

    <center>
        <textarea name="commentaire" rows="4" cols="80">&Eacute;crivez votre commentaire ici</textarea>
    </center>
    <input type="text" onkeydown="if (event.keyCode == 13) document.getElementById('btnSearch').click()">
<!--    <input type="submit" name="envoyer" value="Commenter">-->

</form>

</div>
<?php
$cnx = mysql_connect( "localhost", "root", "admin123" );
$db= mysql_select_db( "DauphinBleu" );
$sql = "SELECT MAX(IDcommentaire) AS IDcommentaire FROM commentaire";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
//$i = 1;

while ($data = mysql_fetch_array($req))
{
    $ID = $data['IDcommentaire'];
}
echo $ID;


//$sql = "SELECT commentaire FROM commentaire";
//$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
////$i = 1;
//
//while ($data = mysql_fetch_array($req))
//{
//   // $i = $i + 1;
//    echo $data['commentaire'];
//    echo "select";
//}

mysql_free_result ($req);
mysql_close ();
?>