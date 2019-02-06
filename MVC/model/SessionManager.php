<?php 

namespace projetblogAlaska\MVC\Model;


require_once("model/Manager.php");

class SessionManager extends Manager
{
    public function findUserByPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $session = $db->prepare('SELECT id, pass, access_level FROM members WHERE pseudo=?');
        $session->execute(array($pseudo));

        return $session;
    }

    public function findUserById($id)
    {
        $db = $this->dbConnect();
        $session = $db->prepare('SELECT * FROM members WHERE id=?');
        $session->execute(array($id));

        return $session;
    }

    public function getAllMembers()
    {
        $db = $this->dbConnect();
        $allMembers = $db->prepare('SELECT id, pseudo, pass, access_level FROM members');
        $allMembers->execute(array());

        return $allMembers;
    }

    public function addMember($pseudo, $pass, $access_level)
    {
        $db = $this->dbConnect();
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);
        $addMember = $db->prepare('INSERT TO members(pseudo, pass, access_level) VALUES(?, ?, ?)');
        $affectedLines = $addMember->execute(array($pseudo, $password_hash, $access_level));

        return  $affectedLines;

    } 
    
    public function deleteMember($id)
    {
        $db = $this->dbConnect();
        $deleteMember = $db->prepare('DELETE FROM members WHERE id=?');
        $affectedLines = $deleteMember->execute(array($id)); 
        return $affectedLines;
    }

    public function updateMember($id, $pseudo, $email, $pass, $access_level)
    {
        $db = $this->dbConnect();
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);
        $updateMember = $db->prepare('UPDATE members SET pseudo=?, email=?, pass=?, access_level=? WHERE id=?');
        $affectedLines = $updateMember->execute(array($pseudo, $email, $password_hash, $access_level, $id));

        return  $affectedLines;
    }
}



