<?php
session_start();
include('../inc/header.php');
?>
<h1 class="mt-5">Paramètres</h1>
<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
        <button class="nav-link" id="v-pills-theme-tab" data-bs-toggle="pill" data-bs-target="#v-pills-theme" type="button" role="tab" aria-controls="v-pills-theme" aria-selected="false">Theme</button>
        <button class="nav-link" id="v-pills-choix-tab" data-bs-toggle="pill" data-bs-target="#v-pills-choix" type="button" role="tab" aria-controls="v-pills-choix" aria-selected="false">Choix</button>
        <button class="nav-link" id="v-pills-affichage-tab" data-bs-toggle="pill" data-bs-target="#v-pills-affichage" type="button" role="tab" aria-controls="v-pills-affichage" aria-selected="false">Affichage</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade d-flex justify-content-center mx-auto px-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
            <!-- <img src="../assets/img/" class="card-img-top" alt="<?= $profil['img'] ?>"> -->
            <div class="mx-auto">
                <h5><?= $_SESSION['user']['lastname'] ?> <?= $_SESSION['user']['firstname'] ?></h5>
                <p><?= $_SESSION['user']['identifient'] ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="tab-pane fade mx-5 px-5" id="v-pills-theme" role="tabpanel" aria-labelledby="v-pills-theme-tab" tabindex="0">
            <form class="mx-5 px-5" action="" method="post">
                <fieldset class="mx-5 px-5">
                    <legend>Selection de theme de ton choix</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="paillettes">
                        <label class="form-check-label" for="paillettes">Paillettes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="bleu" checked>
                        <label class="form-check-label" for="bleu">Bleu</label>
                    </div>
                    <input class="mx-5" type="submit" value="Valider les modifications">
                    <input type="button" value="Annuler">
                </fieldset>
            </form>
        </div>
        <div class="tab-pane fade mx-5 px-5" id="v-pills-choix" role="tabpanel" aria-labelledby="v-pills-choix-tab" tabindex="0">
            <form class="mx-5 px-5" action="" method="post">
                <fieldset class="mx-5 px-5">
                    <legend>Selection de l'affichage de ton choix</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="choises" id="homme">
                        <label class="form-check-label" for="homme">Homme</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="choises" id="femme" checked>
                        <label class="form-check-label" for="femme">Femme</label>
                    </div>
                    <input class="mx-5" type="submit" value="Valider les modifications">
                    <input type="button" value="Annuler">
                </fieldset>
            </form>
        </div>
        <div class="tab-pane fade mx-5 px-5" id="v-pills-affichage" role="tabpanel" aria-labelledby="v-pills-affichage-tab" tabindex="0">
            <form class="mx-5 px-5" action="" method="post">
                <fieldset class="mx-5 px-5">
                    <legend>Selection de l'affichage de ton choix</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="affichage" id="list">
                        <label class="form-check-label" for="list">List</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="affichage" id="cartes" checked>
                        <label class="form-check-label" for="cartes">Cartes</label>
                    </div>
                    <input class="mx-5" type="submit" value="Valider les modifications">
                    <input type="button" value="Annuler">
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
include('../inc/footer.php');
