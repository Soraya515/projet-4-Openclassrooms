<?php

// Chargement des classes
require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');
require_once ('model/SessionManager.php');
require_once ('model/inscriptionManager.php');

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
        throw new Exception('Pseudo inconnu !');
    } else {
        $isPasswordCorrect = password_verify($pass, $resultat['pass']);
        if ($isPasswordCorrect === true) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['access_level'] = $resultat['access_level'];
            // L'utilisateur est reconnu, on le connecte !
            header('Location:index.php');
        } else {
            throw new Exception('mot de passe incorrect !');
            // L'utilisateur est connu, mais MdP mauvais.
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
    require('view/frontend/inscriptionView.php');
}

function  adminlistsposts()
{
    $postManager = new \projetblogAlaska\MVC\Model\PostManager();
    $posts = $postManager->getPosts();  

    require('view/frontend/adminPostsview.php');
}
function adminComments()
{
    $commentManager = new \projetblogAlaska\MVC\Model\CommentManager();
    $allComments = $commentManager->getAllComments();  

    $allreported = $commentManager->getAllreportedcomment();
    $allReportedarray =array();
    while ($report = $allreported->fetch()){

        if (array_key_exists($report['comment_id'],$allReportedarray)){
            $allReportedarray[$report['comment_id']] += 1;
        }
        else{
            $allReportedarray[$report['comment_id']] = 1;
        }
    }
    require('view/frontend/adminCommentview.php');
}
 function is_Admin()
 {
    session_start();
   return isset($_SESSION['access_level']) && $_SESSION['access_level'] == 1;

 }

 function is_member()
 {
    session_start();
    return isset($_SESSION['access_level']) && $_SESSION['access_level'] == 2;
 }

 Function adminMembers()
 {
     $SessionManager = new \projetblogAlaska\MVC\Model\SessionManager();
     $allMembers = $SessionManager->getAllMembers();
    

     require('view/frontend/adminMembersview.php');
 }

Function deleteMember($id)
{
        $SessionManager = new \projetblogAlaska\MVC\Model\SessionManager();
        $deleteMember = $SessionManager->deleteMember($id);

        adminMembers();
}

function showUpdateMemberForm($id) {
    $sessionManager = new \projetblogAlaska\MVC\Model\SessionManager();
    $sessionStatement = $sessionManager->findUserById($id);
    $resultat = $sessionStatement->fetch();

    if ($resultat === false) {
        throw new Exception('ID inconnu !');
    } else {
        require('view/frontend/adminUpdateMemberView.php');
    }
}

Function updateMember($id, $pseudo, $email, $pass, $access_level)
{
        $SessionManager = new \projetblogAlaska\MVC\Model\SessionManager();
        $UpdateMember = $SessionManager->updateMember($id, $pseudo, $email, $pass, $access_level);

        adminMembers();
}

Function addMember()
{
        $SessionManager = new \projetblogAlaska\MVC\Model\SessionManager();
        $addMember = $SessionManager->addMember($pseudo, $pass, $access_level);

        adminMembers();
}






?>
