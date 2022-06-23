<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Mistic love</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="home.php">
                <img src="../assets/img/mistic-love-Logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            </a>
            <p class="fs-2">Mistic Love</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="nav-item mx-3">
                    <a class="nav-link" href="home.php">Accueil</a>
                </div>
                <?php
                if (!isset($_SESSION['user'])) { ?>
                    <div class="nav-item mx-3">
                        <a class="nav-link" href="login.php">Connextion</a>
                    </div>
                <?php } else { ?>
                    <div class="nav-item mx-3">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </div>
                    <div class="nav-item mx-3">
                        <a class="nav-link" href="settings.php">Paramètre</a>
                    </div>
                    <div class="nav-item mx-3">
                        <a class="nav-link" href="login.php">Deconnextion</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="container my-5">