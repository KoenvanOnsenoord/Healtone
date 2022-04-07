<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/abonnementen">Abonnementen</a></li>
        </ol>
    </nav>
    <hr>
    <div class="card-deck">
        <div class="card">
            <div class="card-header">
                <img
                        class="rounded card-image-top"
                        id="deckimg"
                        src="img/Jaaps_Gym_013-scaled.jpg"
                        alt="gym"
                />
            </div>
            <div class="card-body">
                <h4>Maand abonnement</h4>
                <b>Maand abbonnement voor €12,50,- per maand.</b>
                <p>Deel je abonnement met een vriend.<i class="fas fa-times"></i></p>
                <p>Eerste 4 weken gratis trainen.<i class="fas fa-times"></i></p>
                <p>Inschrijf geld is <bold>GRATIS!</bold></p>
                <p>Gratis sport tas.<i class="fas fa-check"></i></p>
            </div>
            <div class="card-footer">
                <a
                        id="a-text"
                        class="card-link btn btn-dark"
                        href="#"
                >Koop Nu!</a
                >
            </div>
        </div>
    </div>

    <div class="card-deck">
        <div class="card">
            <div class="card-header">
                <img
                        class="rounded card-image-top"
                        id="deckimg"
                        src="img/Uitglicht.jpg"
                        alt="gym"
                />
            </div>
            <div class="card-body">
                <h4>Jaar abonnement</h4>
                <b>Jaar abbonnement voor €100,- per jaar.</b>
                <p>Deel je abonnement met een vriend.<i class="fas fa-check"></i></p>
                <p>Eerste 4 weken gratis trainen.<i class="fas fa-check"></i></p>
                <p>Inschrijf geld is <bold>GRATIS!</bold></p>
                <p>Gratis sport tas.<i class="fas fa-check"></i></p>
            </div>
            <div class="card-footer">
                <a
                        id="a-text"
                        class="card-link btn btn-dark"
                        href="#"
                >Koop Nu!</a
                >
            </div>
        </div>
    </div>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>
</html>


<style type="text/css">
    img {
        width: 300px;
    }
    .fas{
        color: ;
        font-size: 30px;
    }

</style>