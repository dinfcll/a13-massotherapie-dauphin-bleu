<?php


$_POST["couriel"];
$_POST["nom"];
//^[[:upper:]]


if (filter_var($_POST["couriel"], FILTER_VALIDATE_EMAIL)) {
    echo "L'email est valide";
    if (!preg_match('/^[[:upper:]][[:digit:]]{2}.{0,10}$/', $_POST["nom"])) {
        echo "Le nom d'utilisateur doit commencer par une majuscule, deux chiffre et une maximum de 10 caracteres ";
    } else {
        $headers = 'From: "Olivier"<olivier_duhamel@hotmail.com>' . "\r\n";
        $headers .= 'Reply-To: olivier_duhamel@hotmail.com' . "\r\n";
        $headers .= 'Content-Type: text/plain; charset="utf-8"' . "\r\n";
        $headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";

        if (mail('olivier_duhamel@hotmail.com', 'Allo', "Est-ce que sa marcher?", $headers)) {
            echo 'Le message a bien été envoyé';
        } else {
            echo 'Le message n\'a pu être envoyé';
            echo $headers;
        }


    }
} else
    echo " non valide<br/>";


if (!preg_match('/^[[:upper:]][[:digit:]]{2}.{0,7}$/', $_POST["nom"])) {
    echo "Le nom d'utilisateur doit commencer par une majuscule, deux chiffre et une maximum de 10 caracteres ";
} else
    echo "Le nom d'utilisateur est correct";
?>

