<?php
global $params;


if (!isAdmin()) {
    //logout();
    header ("Location:/home");
} else {
    switch ($params[2]) {
        case 'home':
            include_once "../Templates/admin/home.php";
            break;

        case 'beheer';
            $products = getAllProducts();
            include_once("../Templates/admin/beheer.php");
            break;
        case 'delete';
        deleteProduct($_GET['id']);
        $products = getAllProducts();
        include_once "../Templates/admin/beheer.php";
        break;

        case 'add';
        if (isPost()) {
            if (fileupload()) {
                saveProduct($_POST['name'], $_POST['category'], $_POST['description'], $message);
                header("Location: /admin/products");
            } else {
                $categories = getCategories();
                include_once "../Templates/admin/add.php";
            }
        }   else {
            $categories = getCategories();
            include_once "../Templates/admin/add.php";
        }
        break;

        default:
        include_once "../Templates/admin/home.php";
        break;
    }
}
?>
