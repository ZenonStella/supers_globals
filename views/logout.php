<?php 
session_start();

session_destroy();
require_once '../controllers/logout-controller.php';

include('../inc/header.php');
?>
<h1 class="mt-5">Deconnextion</h1>
<p>Vous vous êtes bien deconnecter</p>
<?php 
include('../inc/footer.php');