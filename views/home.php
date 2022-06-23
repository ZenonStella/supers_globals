<?php
session_start();
include('../inc/header.php');
require_once '../controllers/home_controller.php';
?>
<h1 class="mt-5">Accueil</h1>
<div class="d-flex justify-content-center my-5">
    <div class="d-flex flex-wrap justify-content-evenly">
        <?php
        if (!isset($_SESSION['user'])) {
            foreach ($profils as $key => $profil) { ?>
                <!-- <div class="card" style="width: 18rem;">
                    <img src="../assets/img/<?= $profil['img'] ?>.jpg" class="card-img-top" alt="<?= $profil['img'] ?>">
                    <div class="card-body">
                        <p class="fs-4 card-title text-center"><?= $profil['name'] ?></p>
                        <p class="card-text">Cherche :<?= $profil['search'] ?></p>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
                        </div>
                    </div>
                </div> -->
            <?php  } ?>
    </div>
    <div>
        <ul class="list-group">
            <?php foreach ($profils as $key => $profil) { ?>
                <li class="list-group-item d-flex flex-row my-3 ps-5 rounded border shadow">
                    <div class="img me-5">
                        <img src="../assets/img/<?= $profil['img'] ?>.jpg" class="card-img-top" alt="<?= $profil['img'] ?>">
                    </div>
                    <div class="ms-5 ps-5 card-body d-flex flex-row align-items-center justify-content-evenly">
                        <p class="fs-4 card-title text-center mx-5"><?= $profil['name'] ?></p>
                        <p class="card-text m-0 px-5">Cherche : <?= $profil['search'] ?></p>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php } else {
            foreach ($profils as $key => $profil) { ?>
        <div class="card mb-3" style="width: 10rem;">
            <img src="../assets/img/<?= $profil['img'] ?>.jpg" class="card-img-top" alt="<?= $profil['img'] ?>">
            <div class="card-body">
                <p class="fs-4 card-title"><?= $profil['name'] ?></p>
                <p class="card-text">Cherche : <?= $profil['search'] ?></p>
                <div class="d-flex justify-content-evenly">
                    <a href="#" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></a>
                    <a href="#" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
                </div>
            </div>
        </div>
    <?php } ?>
    <div>
        <!-- <ul class="list-group">
            <?php foreach ($profils as $key => $profil) { ?>
                <li class="list-group-item d-flex flex-row my-3 ps-5 rounded border shadow">
                    <div class="img me-5">
                        <img src="../assets/img/<?= $profil['img'] ?>.jpg" class="card-img-top" alt="<?= $profil['img'] ?>">
                    </div>
                    <div class="ms-5 ps-5 card-body d-flex flex-row align-items-center justify-content-evenly">
                        <p class="fs-4 card-title text-center mx-5"><?= $profil['name'] ?></p>
                        <p class="card-text m-0 px-5">Cherche : <?= $profil['search'] ?></p>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
                        </div>
                    </div>
                </li>
            <?php } ?> -->
        </ul>
    </div>
<?php } ?>
</div>

<?php
include('../inc/footer.php');
