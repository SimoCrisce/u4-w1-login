<?php
include __DIR__ . "/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link <?= $_SERVER["REQUEST_URI"] === "/u3-w1-php/u4-w1/" ? "active" : "" ?>" aria-current="page" href="/u3-w1-php/u4-w1/">Home</a>
            </li>
            
            
        </ul>
        <div class="ms-auto">
            <a href="/u3-w1-php/u4-w1/login.php" class="btn <?= $_SERVER["REQUEST_URI"] === "/u3-w1-php/u4-w1/login.php" ? "btn-primary" : "btn-outline-primary" ?>">Accedi</a>
            <a href="/u3-w1-php/u4-w1/register.php" class="btn <?= $_SERVER["REQUEST_URI"] === "/u3-w1-php/u4-w1/register.php" ? "btn-light" : "btn-outline-light" ?>">Registrati</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="container">