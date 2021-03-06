<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $categories = $pdo->query(  'SELECT * FROM catogories')->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $categories;
}

function getCategoryName(int $id)
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM catogories WHERE id= ?');
    $sth->bindParam(1, $id, PDO::PARAM_INT);
    $sth->execute();
    $category = $sth->fetch(PDO::FETCH_ASSOC);
    return $category['name'];
}
