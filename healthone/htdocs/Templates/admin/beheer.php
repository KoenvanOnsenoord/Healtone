<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/pictures.php');
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/beheer">Beheer</a></li>
        </ol>
    </nav>
    <nav class="navbar navbar-dark bg-mynav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My App</a>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight"><h2>Beheer Sportapparaten</div>
        </div>
        <table class= "table align-middle">
            <thead>
            <tr>
                <th scope="col">nr</th>
                <th scope="col">naam</th>
                <th scope="col">category</th>
                <th scope="col" class="text-center">aanpassen</th>
                <th scope="col" class="text-right">verwijder</th>
            </tr>
            </thead>
            <tbody>
            <?php $count=1;global $products;?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <th scope="row"> <?=$count++?> </th>
                    <td><?=$product->name?></td>
                    <td><?=getCategoryName($product->category_id)?></td>

                    <td class="text-center">
                        <a type="button" class="btn btn-success btn-sm px3" href="/admin/edit/<?=$product->id?>">
                            <i class=" bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm px3" href="/admin/delete/<?=$product->id?>">
                            <i class=" bi bi-dash-square"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <h3>Apparaat toeveogen</h3>
    <a href="/admin/add" type="button" class="btn btn-success btn-sm px-3">
    <i class="bi bi-plus-square"></i>
    </a>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>
</html>
