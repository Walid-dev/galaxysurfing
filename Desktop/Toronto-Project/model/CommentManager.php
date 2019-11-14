<?php
class CommentManager extends Manager
{

    public function listComments()
    {
        $db = Manager::dbConnect();
        $req = $db->query('SELECT id, post_id, author, comment, report, comment_status, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY report DESC LIMIT 0, 50');
        return $req;
    }

    public function deleteComment($id)
    {
        $db = Manager::dbConnect();
        $deleteComment = $db->prepare("DELETE FROM comments WHERE id=$id");
        $deleteComment->execute(array($id));

        return $deleteComment;
    }

    public function getComments($postId)
    {
        $db = Manager::dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, report, comment_status, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = Manager::dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, report, comment_status, comment_date) VALUES(?, ?, ?, 0, 0, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }


    public function signal($id, $variable, $commentStatus)
    {
        $db = Manager::dbConnect();
        $signalComment = $db->prepare("UPDATE comments SET report='$variable', comment_status='$commentStatus' WHERE id='$id'");
        $signalComment->execute(array($id, $variable, $commentStatus));

        return $signalComment;
    }

    public function validateComment($id)
    {
        $db = Manager::dbConnect();
        $validateComment = $db->prepare("UPDATE comments SET comment_status=0, report=0 WHERE id='$id'");
        $validateComment->execute(array($id));

        return $validateComment;
    }
}
