<?php
namespace projetblogAlaska\MVC\Model;

require_once ("model/Manager.php");

class PostManager extends Manager
{

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array(
            $postId
        ));
        $post = $req->fetch();

        return $post;
    }

    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES(?, ?, NOW())');
        $req->execute(array(
            $title,
            $content
        ));
        $addpost = $req->fetch();

        return $addpost;
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $deletepost = $db->prepare('DELETE FROM posts WHERE id=?');
        $affectedLines = $deletepost->execute(array(
            $id
        ));

        return $affectedLines;
    }

    public function updatePost($id, $title, $content)
    {
        $db = $this->dbConnect();
        $updatepost = $db->prepare('UPDATE posts SET title=?, content=? WHERE id=?');
        $affectedLines = $updatepost->execute(array(
            $title,
            $content,
            $id
        ));

        return $affectedLines;
    }

    public function findpostbyid($id)
    {
        $db = $this->dbConnect();
        $findpost = $db->prepare('SELECT * FROM posts WHERE id=?');
        $findpost->execute(array(
            $id
        ));

        return $findpost;
    }
}