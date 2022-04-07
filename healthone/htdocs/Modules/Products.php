<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId):array
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product WHERE category_id=? ');
    $sth->bindParam(1, $categoryId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Product');
}

function getProduct(int $productId)
{
   global $pdo;
   $sth = $pdo->prepare('SELECT * FROM product WHERE id=?');
   $sth->bindParam(1, $productId);
   $sth->execute();
   return $sth->fetchAll(PDO::FETCH_CLASS, 'Product')[0];
}


function getAllProducts():array {
    global $pdo;
    // $sth = $pdo->prepare()'SELECT * product ORDER BY category_id';
    $sth = $pdo->prepare(
        'SElECT p.id as id, p.picture as picture, p.description as description,
        p.name as name, p.category_id as category_id, c.name as category
        FROM product p JOIN catogories c 
        ON (p.category_id = c.id)');
    $sth->execute();
    return $sth->fetchALL(PDO::FETCH_CLASS, 'Product');
}

function deleteProduct(int $productID)
{
    global $pdo;
    $id = filter_var($_REQUEST['id'], FILTER_VALIDATE_INT);
    if($id!=false)
    {
        $sql = 'DELETE FROM `product` WHERE `id`=:id';

        $stmnt = $pdo->prepare($sql);
        $stmnt->bindParam('id',$id);
        $stmnt->execute();
    }
}
function getAdd():array
{
    global $pdo;
    $categories = $pdo->query('SELECT * FROM category')->fetchAll(pdo::FETCH_CLASS, 'Category');
    return $categories;
}

function isPost () {
    if ( (isset($_POST['name'])) && (!empty($_POST['name'])) &&
         (isset($_POST['category'])) && (!empty($_POST['category'])) &&
         (isset($_POST['description'])) && (!empty($_POST['description'])) &&
         (isset($_FILES['fileToUpload']['tmp_name'])) && (!empty($_FILES['fileToUpload']['tmp_name'])))
    {
        return true;
    }
    else {
        return false;
    }

}

