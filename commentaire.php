<?php include("header.html");?>

    <div class="container">
        <br/>
        <br/>

<form method="POST" action="ecrireBD.php">

    <center>
        <textarea name="commentaire" rows="4" cols="80">&Eacute;crivez votre commentaire ici</textarea>
    </center>
<!--    <input type="text" onkeydown="if (event.keyCode == 13) document.getElementById('btnSearch').click()">-->
    <input type="submit" name="envoyer" value="Commenter">

</form>

</div>
<?php
$cnx = mysql_connect( "localhost", "equipe6", "equipe6abc" );
$db= mysql_select_db( "a13equipe6" );
$sql = "SELECT MAX(IDcommentaire) AS IDcommentaire FROM commentaire";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
//$i = 1;

while ($data = mysql_fetch_array($req))
{
    $ID = $data['IDcommentaire'];
}


$sql = "SELECT commentaire FROM commentaire WHERE IDcommentaire > $ID-15 ORDER BY IDcommentaire DESC  ";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
//$i = 1;
echo '<div class="container">';


while ($data = mysql_fetch_array($req))
{
    echo '<div class="masthead">';
    echo '<div class="navbar">';
    echo '<div class="navbar-inner">';
    echo '<div class="container">';
    echo '<ul class="nav">';
   // $i = $i + 1;
//    echo ' <div class="navbar-inner">';
    echo '<li class="container1">';
    echo $data['commentaire'];
    echo '</li>';
//    echo "<br/><br/>";

echo '</ul>';
echo ' </div>';
echo ' </div>';
echo ' </div>';
echo ' </div>';
}
echo ' </div>';
mysql_free_result ($req);
mysql_close ();
?>

