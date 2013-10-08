<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-04
 * Time: 13:41
 * To change this template use File | Settings | File Templates.
 */$cnx = mysql_connect( "localhost", "root", "admin123" );
$db= mysql_select_db( "lab6" );
$sql = "SELECT texte FROM lab6 where page='lab6'";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

$data = mysql_fetch_array($req);
?><script src="ckeditor/ckeditor.js"></script>



<form method="POST" action="envoyersql.php"">

<textarea class="ckeditor" name="editor1"><?php echo $data['texte']; ?></textarea>
<input type="submit" name="envoyer" value="Sauvegarder">

</form>

