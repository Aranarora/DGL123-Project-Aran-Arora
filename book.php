<?php
class Book extends Database{

    protected function setUser($name, $date, $time)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `book` (book_name, book_date, book_time) VALUES (?, ?, ?);');

        if (!$stmt->execute(array($name, $date, $time))) {
            $stmt = null;
            header("location: ./?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}