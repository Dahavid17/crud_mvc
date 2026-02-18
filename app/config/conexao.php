<?php

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=crud_mvc", "root", "flokis45");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>