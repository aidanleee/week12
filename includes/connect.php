<?php
    $user = "root";
    $pw = "root";

    try {
        $conn = new PDO('mysql:host=local;dbname=db_week12', $user, $pw);
    } catch(PDOException $exception) {
        echo 'connect error!' . $exception->getMessage();
    }
?>