<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/review.php';
require '../Modules/common.php';
require '../Modules/logout.php';
require '../Modules/Registration.php';
require '../Modules/Login.php';
require '../Modules/Member.php';
require '../Modules/Fileupload.php';
require '../Modules/changeProfile.php';
session_start();
var_dump($_SESSION);

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $titleSuffix = ' |Category';
        if (isset($_GET['id'])) {
            $categoyId = $_GET['id'];
            $products = getProducts($categoyId);
            $name = getCategoryName($categoyId);
            include_once "../Templates/products.php";
        }
        break;

    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $name = getCategoryName($product->category_id);
            $titleSuffix = ' | ' . $product->name;
            //$reviews = getRiviews($productId);
            include_once "../Templates/product.php";
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
        break;
    case 'review':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $name = getCategoryName($product->category_id);
            $titleSuffix = ' | Review ' . $product->name;
            if (isset($_POST['close'])) {
                header("Location: /product/$productId");
            } elseif (isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['review']) && !empty($_POST['review'])) {
                saveReview($_POST['name'], $_POST['review'], $_POST['stars']);
                $reviews = getReviews($productId);
                $message = $_POST['name'];
                header("Location: /product/$productId");
            } else {
                include_once "../Templates/review.php";
            }
        } else {
            include_once "../Templates/home.php";
        }

        break;
    case 'contact':
        include_once "../Templates/contact.php";
        break;
    case 'login':
        $titleSuffix = ' | Login ';
        if (isset($_POST['login'])) {
            $result = checkLogin();

            switch ($result) {
                case 'ADMIN':
                    header("Location: /admin/home");
                    //include_once "../Templates/admin/home.php";
                    break;
                case 'MEMBER':
                    header("Location: /member/home");
                    break;
                case 'FAILURE':
                    $message = "Email of password niet correct ingevuld!";
                    include_once "../Templates/login.php";
                    break;
                case 'INCOMPLETE':
                    $message = "Formulier niet volledig ingevuld!";
                    include_once "../Templates/login.php";
                    break;
            }
        } else {
            include_once "../Templates/login.php";
        }
        break;

    case 'admin':
        include_once('admin.php');
        break;
    case 'logout':
        $_SESSION = [];
        session_destroy();
        header('Location: /home');
        break;
    case 'abonnementen';
        include_once "../Templates/abonnementen.php";
        break;
    case 'register':
        $titleSuffix = ' | Register';
        if(isset($_POST['register'])) {
            //var_dump($_POST);die;
            $result = makeRegistration();

            switch ($result) {
                case 'SUCCESS':
                    $message="gebruiker aanmaken is gelukt";
                    include_once "../Templates/home.php";
                    break;
                case 'INCOMPLETE':
                    $message = "Niet alle velden correct ingevuld";
                    include_once "../Templates/register.php";
                    break;
                case 'EXIST':
                    $message = "Gebruiker bestaat al";
                    include_once "../Templates/register.php";
                    break;
            }
        } else {
            include_once "../Templates/register.php";
        }break;

    case 'member':
        include_once ('member.php');
        break;
    case 'home':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}