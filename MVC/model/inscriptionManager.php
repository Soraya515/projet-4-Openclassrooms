<?php 

namespace projetblogAlaska\MVC\Model;


require_once("model/Manager.php");

class inscriptionManager extends Manager
{
    public function PseudoExist($pseudo)
    {
        $db = $this->dbConnect();
        $pseudoexist = $db->prepare('SELECT id, pass, email FROM formulaire WHERE pseudo= :pseudo');
        $pseudoexist->execute(array($pseudo));

        return $pseudoexist;
    }



    public function createaccount($pseudo,$email,$pass)
    {
        $password_hash = password_hash($pass);
        $db = $this->dbconnect();
        $account = $db->prepare('INSERT INTO members(pseudo, email, pass,date_inscription) VALUES(?, ?, ?, ?,NOW())');
       $affectedlines = $account->execute(array($pseudo,$email,$password_hash));

       return $affectedLines;
    }
}

