<?php 

namespace projetblogAlaska\MVC\Model;


require_once("model/Manager.php");

class SessionManager extends Manager
{
    public function findUserByPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $session = $db->prepare('SELECT id, pass FROM members WHERE pseudo= :pseudo');
        $session->execute(array($pseudo));
        return $session;
    }
}
