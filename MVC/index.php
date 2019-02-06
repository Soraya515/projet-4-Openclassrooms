<?php
require('controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'connexion') {
            if(isset($_POST['login']) && isset($_POST['pass'])) {
                if(!empty($_POST['login']) && !empty($_POST['pass'])) {
                    sessionconnect($_POST['login'], $_POST['pass']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                showLogin();
            }
        }
        elseif ($_GET['action'] == 'inscription'){
            if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmation_password'])) {
                if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmation_password'])) {
                    inscription($_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['confirmation_password']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                showInscription();
            }
        } 
        elseif ($_GET['action'] == 'adminlistsposts') {
            
            if(is_admin()){
        
                adminlistsposts();
            }

            else {
                listPosts();
            }
    
        }
        elseif($_GET['action'] =='adminComments'){

            if(is_admin()){
        
                adminComments();
            }

            else {
                
                listPosts();
            }
 
        }
        elseif ($_GET['action'] == 'adminMembers'){

            if(is_admin()){

             adminMembers();
            } else {
                listPosts();  
            }         
        }
        elseif ($_GET['action'] == 'deleteMember'){

            if(is_admin() && isset($_GET['id'])){
                deleteMember($_GET['id']);

            }else {
             listPosts();  
            }  
        }
        elseif ($_GET['action'] == 'updateMemberForm') {
            if(is_admin() && isset($_GET['id'])){
                showUpdateMemberForm($_GET['id']);
            }else {
             listPosts();  
            }  
        }
        elseif ($_GET['action'] == 'updateMember') {
            if(is_admin()) {
                if(isset($_POST['id']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['access_level'])) {
                    if(!empty($_POST['id']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['access_level'])) {
                        updateMember($_POST['id'], $_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['access_level']);
                    }
                    else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                }
            }
            else {
                listPosts();
            }
            
        }
    }
    else {
        listPosts();
    }   
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

