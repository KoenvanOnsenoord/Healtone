<!DOCTYPE html>
<html>

<?php
include_once('defaults/head.php')
?>

<body>
<div class="container">
    <?php
    include_once('defaults/head.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    global $name, $product;
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/categories/<?= $product->category_id ?>"> <?= $name ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$product->name ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <img  class="img-fluid center-block" width="200px" src='/img/<?= $product->picture ?>'/>
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row gy-3">
        <p class="lead">Geef uw mening over dit sportapparaat</p>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="col-form-label">
                    Naam:
                </label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name2" class="col-form-label">
                    Review:
                </label>
                <input type="text" name="review" class="form-control" id="name2">
            </div>
            <div class="mb-3">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Waardering:</label>
                <select class="custom-seleect mr-sm-2" name="stars" id="inlineFormCustomSelect">
                    <option selected value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
                <button type="submit" class="btn btn-secondary">Save Change</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>