<?php
session_start();
// var_dump($_SESSION['user']);
require_once '../controllers/dashboard-controller.php';
include('../inc/header.php');
?>
<h1 class="mt-5">Bonjour <?= $_SESSION['user']['lastname'] ?>, bienvenu sur le dashboard</h1>
<div class="d-flex justify-content-center mt-5">
    <a class="btn btn-secondary" href="logout.php">Deconnextion</a>
</div>
<?php
include('../inc/footer.php');
