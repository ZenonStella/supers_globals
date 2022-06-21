<?php 
// $session_start();
var_dump($_SESSION['user']);
require('../inc/header.php');
require_once '../controllers/dashboard-controller.php';
?>
<!-- <h1>identifient : <?= $_SESSION['name'] ?></h1> -->

<?php 
require('../inc/footer.php');