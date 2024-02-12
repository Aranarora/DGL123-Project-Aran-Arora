<?php
class Login extends Database
{

    protected function getbook($name, $date, $time)
    {
        $stmt = $this->connect()->prepare('SELECT book_date FROM book WHERE book_name = ? AND book_date = ?;');

        if (!$stmt->execute(array($name, $date))) {
            $stmt = null;
            echo("<script>alert('STMT failed to link');window.location.href='/DGL123-Project-Aran-Arora/';</script>");
            
            exit();
        }

            $book = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["bookname"] = $book[0]["book_name"];
            $_SESSION["bookdate"] = $book[0]["book_date"];
            $_SESSION["booktime"] = $book[0]["book_time"];
            $stmt = null;
        }
}
    