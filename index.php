<?php

require_once __DIR__ . "/partials/functions.php";
require_once __DIR__ . "/partials/controller.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        html {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <!-- ---------------------------- -->
    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        

        // Controllo se la richiesta è di tipo POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Verifico se l'email è valida
            if (email_controls($email)) {
                echo '<div class="alert alert-success mt-3">Email valida.</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">Errore: Email non valida.</div>';
            }
        }
        ?>
    </header>
    <!-- ---------------------------- -->
    <main>
        <form action="" method="POST" class="row g-3 flex-column w-50 m-auto">
            <h2>Metti i dati qui</h2>
            <div class="col-auto">

                <label for="email" class="visually-hidden">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="email">

            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </form>
    </main>
</body>

</html>