<?php
namespace projetblogAlaska\MVC\Model;

require_once ("model/Manager.php");

class inscriptionManager extends Manager
{

    public function pseudoExist($pseudo)
    {
        $db = $this->dbConnect();
        $pseudoexist = $db->prepare('SELECT id, pass, email FROM formulaire WHERE pseudo=?');
        $pseudoexist->execute(array(
            $pseudo
        ));

        return $pseudoexist;
    }

    public function createAccount($pseudo, $email, $pass)
    {
        $password_hash = password_hash($pass, PASSWORD_DEFAULT);
        $db = $this->dbconnect();
        $account = $db->prepare('INSERT INTO members(pseudo, email, pass,inscription_date,access_level) VALUES(?, ?, ?,NOW(),?)');
        $affectedLines = $account->execute(array(
            $pseudo,
            $email,
            $password_hash,
            2
        ));

        return $affectedLines;
    }
}

