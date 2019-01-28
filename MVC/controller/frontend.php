<?php

// Chargement des classes
require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');

function listPosts()
{
    $postManager = new \projetblogAlaska\MVC\Model\PostManager();
    $posts = $postManager->getPosts();

    require ('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \projetblogAlaska\MVC\Model\PostManager();
    $commentManager = new \projetblogAlaska\MVC\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require ('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \projetblogAlaska\MVC\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function sessionconnect($pseudo, $pass)
{
    $sessionManager = new \projetblogAlaska\MVC\Model\SessionManager();
    $sessionStatement = $sessionManager->findUserByPseudo($pseudo);
    $resultat = $sessionStatement->fetch();

    if ($resultat === false) {
        // J'ai pas ce pseudo en base.
        // TODO : Envoyer une erreur.
    } else {
        $isPasswordCorrect = password_verify($pass, $resultat['pass']);
        if ($isPasswordCorrect === true) {

            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;

            // L'utilisateur est reconnu, on le connecte !
            // TODO : session_start et redirection...
        } else {
            throw new Exception('mot de passe incorrecte !');
            // L'utilisateur est connu, mais MdP mauvais.
            // TODO : Envoyer une erreur.
        }
    }

    require ('view/frontend/connexionView.php');
}

function showLogin()
{
    require ('view/frontend/connexionView.php');
}

function inscription($pseudo, $email, $pass, $confirmation_pass)
{
    $inscriptionManager = new \projetblogAlaska\MVC\Model\inscriptionManager();
    $pseudoStatement = $inscriptionManager->pseudoExist($pseudo);
    $resultat = $pseudoStatement->fetch();

    if ($resultat === false) {

        // le pseudo n'existe pas en base donc il peut être utilisé
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($pass == $confirmation_pass) {
                $inscriptionManager->createAccount($pseudo, $email, $pass);
                // appel du mgr : inscription
            } else {

                throw new Exception('mots de passe non identiques');
            }
        } else {

            throw new Exception('mail invalide !');
        }
    } else {
        // le pseudo existe déjà message d'erreur
        throw new Exception('le pseudo  est déjà utilisé !');
    }
    require ('view/frontend/inscriptionView.php');
}

function showInscription()
{
    require ('view/frontend/inscriptionView.php');
}

function  adminlistsposts()
{
    $postManager = new \projetblogAlaska\MVC\Model\PostManager();
    $posts = $postManager->getPosts();  

    require('view/frontend/adminPostsview.php');
}
 
?>
