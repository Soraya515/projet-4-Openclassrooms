<?php
namespace projetblogAlaska\MVC\Model;

require_once ("model/Manager.php");

class CommentManager extends Manager
{

    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array(
            $postId
        ));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array(
            $postId,
            $author,
            $comment
        ));

        return $affectedLines;
    }

    public function isCommentAlreadyReported($postId)
    {
        $db = $this->dbConnect();
        $reports = $db->prepare('SELECT COUNT(id) AS reportCount FROM reports WHERE comment_id = ? AND member_id = ?');
        $reports->execute(array(
            $postId,
            $_SESSION['id']
        ));
        $reportCount = $reports->fetch();
        return $reportCount['reportCount'] > 0;
    }

    public function reportComment($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO reports(comment_id, member_id, date_report) VALUES(?, ?, NOW())');
        $affectedLines = $comments->execute(array(
            $postId,
            $_SESSION['id']
        ));

        return $affectedLines;
    }

    public function getAllcomments()
    {
        $db = $this->dbconnect();
        $allComments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments');
        $allComments->execute(array());

        return $allComments;
    }

    public function getAllreportedcomment()
    {
        $db = $this->dbconnect();
        $allReportedcomments = $db->prepare('SELECT comment_id, member_id,date_report FROM reports');
        $allReportedcomments->execute(array());

        return $allReportedcomments;
    }

    public function updateComment($id, $author, $comment)
    {
        $db = $this->dbConnect();
        $updateComment = $db->prepare('UPDATE comments SET author=?, comment=? WHERE id=?');
        $affectedLines = $updateComment->execute(array(
            $author,
            $comment,
            $id
        ));

        return $affectedLines;
    }

    public function addComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $addComment = $db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES(?, ?, ?,NOW())');
        $affectedLines = $addComment->execute(array(
            $postId,
            $author,
            $comment
        ));

        return $affectedLines;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE id=?');
        $affectedLines = $deleteComment->execute(array(
            $id
        ));

        return $affectedLines;
    }

    public function findCommentbyid($id)
    {
        $db = $this->dbConnect();
        $findcomment = $db->prepare('SELECT * FROM comments WHERE id=?');
        $findcomment->execute(array(
            $id
        ));

        return $findcomment;
    }
}






