<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $categories;
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
            <li class="breadcrumb-item"><a href="/add">Add</a></li>
        </ol>
    </nav>
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="inputName" class="form-label">Naam</label>
            <input type="text" class="form-control" id="inputName" name="name"
                   value='<?php if (isset($_POST['name'])) {echo $_POST['name'];} else {echo "";}
                   ?>'>
        </div>
        <div class="col-md-6">
            <label for="cat" class="form-label">Category</label>
            <select class="form-select" id="cat" name="category">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id?>"><?=$category->name?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-12">
            <label for="name" class="col-form-label">Beschrijving:</label>
            <textarea class="form-control" id="name" name="description"><?php if
                (isset($_POST['description'])) {echo $_POST['description'];} else {echo "";} ?></textarea>
        </div>
        <div class="col-12">
            <label for="formFile" class="form-label">Image bij sportapparaat </label>
            <input class="form-control" name="fileToUpload" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>
</html>

