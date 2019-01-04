<?php 

require('connectToDb.php');

if(isset($_POST['pseudo']) && isset($_POST['pass'])) {
    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $_POST['pseudo']));
    $resultat = $req->fetch();



    if (!$resultat)
    {
        $error_msg = 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $error_msg = 'Vous êtes connecté !';
        }
        else {
            $error_msg = 'Mauvais identifiant ou mot de passe !';
        }
    }
}
require('../view/viewConnexion.php');
?>



