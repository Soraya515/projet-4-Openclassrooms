<?php
if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['confirmation_mdp']) && isset($_POST['email'])) {
    
    require('connectToDb.php');

    //pseudo libre ?
    $request = $bdd->prepare('SELECT COUNT(*) FROM membres WHERE pseudo=?');
    $request->execute(array($_POST['pseudo']));

    $nb_resultats = $request->fetchColumn();
    if($nb_resultats > 0) {
        //NOPE
        $error = 'pseudo déjà pris';
    }
    else {
        //pseudo libre !
        
            //mdp ok ?
        if($_POST['mdp'] != $_POST['confirmation_mdp']) {
            //NOPE
            $error = 'mots de passe différents';
        }
        else {
            //mdp ok !

            //email ok ?
            if(!preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', $_POST['email'])){
                //NOPE
                $error = 'mail invalide';
            }
            else {
                //si tout ok, créer, redirect vers connexion.php
                $hashed_pwd = password_hash ($_POST['mdp'], PASSWORD_DEFAULT);
                $request = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
                $request->execute(array('pseudo'=>$_POST['pseudo'], 'pass'=>$hashed_pwd, 'email'=>$_POST['email']));
                header('Location: connexion.php');
                exit();
            }
        }
    }
}
require('../view/viewInscription.php');
?>
