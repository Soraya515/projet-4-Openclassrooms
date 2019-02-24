<?php
require ('controller/frontend.php');

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case "listPosts":
                listPosts();
                break;
            case "post":
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    post();
                } else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
                break;
            case "addComment":
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (! empty($_POST['author']) && ! empty($_POST['comment'])) {
                        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    } else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                } else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
                break;
            case "connexion":
                if (isset($_POST['login']) && isset($_POST['pass'])) {
                    if (! empty($_POST['login']) && ! empty($_POST['pass'])) {
                        sessionconnect($_POST['login'], $_POST['pass']);
                    } else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                } else {
                    showLogin();
                }
                break;
            case "inscription":
                if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmation_password'])) {
                    if (! empty($_POST['pseudo']) && ! empty($_POST['email']) && ! empty($_POST['password']) && ! empty($_POST['confirmation_password'])) {
                        inscription($_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['confirmation_password']);
                    } else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                } else {
                    showInscription();
                }
                break;
            case "deconnexion":
                $_SESSION = array();
                session_destroy();
                listPosts();
                break;
            case "adminposts":
                if (is_admin()) {
                    adminPosts();
                }
                else {
                    listPosts();
                }
                break;
                
            case "addPost":
                if (is_admin()) {
                    if (isset($_POST['title']) && isset($_POST['content'])) {
                        if (!empty($_POST['title']) && !empty($_POST['content'])) {
                            addPost($_POST['title'], $_POST['content']);
                        } else {
                            throw new Exception('Tous les champs ne sont pas remplis !');
                        }
                    }
                }
                break;
                
            case "deletePost":
                if (is_admin() && isset($_GET['id'])) {
                    deletePost($_GET['id']);
                } else {
                    listPosts();
                }
                break;
                
           case "updatePost":
                if (is_admin()) {
                    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])) {
                        if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])) {
                            updatePost($_POST['id'], $_POST['title'], $_POST['content']);
                        } else {
                            throw new Exception('Tous les champs ne sont pas remplis !');
                        }
                    }
                } else {
                    listPosts();
                }
                break;
           case "addPostForm":
                    if (is_admin()) {
                        showAddPostForm();
                    } else {
                        listPosts();
                    }
                    break;
                    
           case "updatepostForm":
                if (is_admin()) {
                    showUpdatePostForm($_GET['id']);
                } else {
                    listPosts();
                }
                break;
                    
            case "adminComments":
                if (is_admin()) {
                    adminComments();
                }
                else {
                    listPosts();
                }
                break;
            case "adminMembers":
                if (is_admin()) {
                    adminMembers();
                } else {
                    listPosts();
                }
                break;
            case "deleteMember":
                if (is_admin() && isset($_GET['id'])) {
                    deleteMember($_GET['id']);
                } else {
                    listPosts();
                }
                break;
            case "updateMemberForm":
                if (is_admin() && isset($_GET['id'])) {
                    showUpdateMemberForm($_GET['id']);
                } else {
                    listPosts();
                }
                break;
            case "updateMember":
                if (is_admin()) {
                    if (isset($_POST['id']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['access_level'])) {
                        if (! empty($_POST['id']) && ! empty($_POST['pseudo']) && ! empty($_POST['email']) && ! empty($_POST['password']) && ! empty($_POST['access_level'])) {
                            updateMember($_POST['id'], $_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['access_level']);
                        } else {
                            throw new Exception('Tous les champs ne sont pas remplis !');
                        }
                    }
                } else {
                    listPosts();
                }
                break;
            case "addMemberForm":
                if (is_admin()) {
                    showaddMemberForm();
                } else {
                    listPosts();
                }
                break;
            case "addMember":
                if (is_admin()) {
                    if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['access_level'])) {
                        if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['access_level'])) {
                            addMember($_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['access_level']);
                        } else {
                            throw new Exception('Tous les champs ne sont pas remplis !');
                        }
                    }
                }
                break;
            case "deleteComment":
                if (is_admin() && isset($_GET['id'])) {
                    deleteComment($_GET['id']);
                } else {
                    listPosts();
                }
                break;
            case "updateComment":
                if (is_admin()) {
                    if (isset($_POST['id']) && isset($_POST['author']) && isset($_POST['comment'])) {
                        if (!empty($_POST['id']) && !empty($_POST['author']) && !empty($_POST['comment'])) {
                            updateComment($_POST['id'], $_POST['author'], $_POST['comment']);
                        } else {
                            throw new Exception('Tous les champs ne sont pas remplis !');
                        }
                    }
                } else {
                    listPosts();
                }
                break;
            case "updateCommentForm":
                if (is_admin() && isset($_GET['id'])) {
                    showUpdatecommentsForm($_GET['id']);
                } else {
                    listPosts();
                }
                break;
            case "reportComment":
                if(isset($_POST['post_id']) && isset($_POST['comment_id'])) {
                    reportComment($_POST['post_id'], $_POST['comment_id']);
                }
                else {
                    listPosts();
                }
                
            default:
                listPosts();
        }
    }
    else {
        listPosts();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
