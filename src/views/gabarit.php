<!DOCTYPE>

<html>
<head>
    <title><?= $pageTitle ?></title>
    <!-- Chargement du CSS de Bootstrap -->
    <link rel="stylesheet" href="dependencies/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencies/bootstrap/dist/css/bootstrap-theme.min.css">

    <meta charset="utf8">
</head>

<div class="dropdown col-md-8 col-md-offset-2">
    <h1>Mon Blog</h1>


    <button class="btn btn-default dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Billets	par	catégories
        <br><span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
        <li><a href="index.php?controller=BILLET">PHP	(5) </a></li>
        <li><a href="index.php?controller=HTML">Web	(3) </a></li>
        <li><a href="#">Photo	(8) </a></li>
        <li><a href="index.php?controller=accueil">Chatons	(120000000) </a></li>
    </ul>
</div>

<div class="dropdown col-md-8 col-md-offset-2"><br>
    <button class="btn btn-default dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Historique
        <br><span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
        <li><a href="#">2017 (20) </a></li>
        <li><a href="#">2016 (15)  </a></li>
        <li><a href="#">2015 (8) </a></li>
        <li><a href="#">2014 (2) </a></li>
    </ul>
</div>


<!-- Contenu de l'application -->
<section class="row">
    <div class="col-md-8 col-md-offset-2">
        <?= $content ?>
    </div>
</section>



<!-- Affichage des massages flash -->
<?php if(isset($_SESSION["flash"])): ?>
    <div class="row">
        <div class ="col-md-6 col-md-offset-3 alert alert-info">
            <?php
            //Affichage du message
            echo $_SESSION["flash"];
            //Suppresion du message
            unset($_SESSION["flash"]);
            ?>
        </div>
    </div>

<?php endif; ?>

<script src="dependencies/jquery/dist/jquery.min.js"></script>
<script src="dependencies/bootstrap/dist/js/bootstrap.min.js"></script>



</body>
</html>