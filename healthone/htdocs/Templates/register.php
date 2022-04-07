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
            <li class="breadcrumb-item"><a href="/register">Registreren</a></li>
        </ol>
    </nav>
    <form class="row g-3" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">FirstName</label>
            <input type="text" name="firstName" class="form-control" id="inputAddress" placeholder="firstname">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">LastName</label>
            <input type="text" name="lastName" class="form-control" id="inputAddress2" placeholder="lastname">
        </div>


        <div class="col-12">
            <button type="submit" name="register" class="btn btn-primary">Sign in</button>
        </div>
    </form>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>
</html>
