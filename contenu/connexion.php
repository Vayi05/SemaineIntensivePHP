<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=ok', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
?>