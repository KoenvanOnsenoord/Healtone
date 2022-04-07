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
    global $product, $name;
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
                <img class="img-fluid center-block" width="200px" src='/img/<?= $product->picture ?>'>
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                    <a type="button" href="/review/<?=$product->id?>" role="button" class="btn btn-primary">Add Review</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=healthone","root");
        $query = $db->prepare ("SELECT * FROM review");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as &$data) {
            echo $data ["name"] . " <br>  ";
            echo $data ["description"] . " <br> ";
            echo $data ["stars"] . " <br> <br> ";
        }
        echo "</table>";
    } catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
    ?>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>
