<?php
function getReviews(int $id):array
{
    GLOBAL $pdo,$params;
    $sth=$pdo->prepare('SELECT * FROM review WHERE product_id=(Select id FROM product WHERE id=?) order by date DESC ');
    $sth->bindParam(1,$id);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Review');
}

function saveReview(string $name, string $review, string $stars):void
{
GLOBAL $pdo,$product;
        $sth = $pdo->prepare('INSERT INTO review (name,date,description,stars,product_id) VALUES (?,NOW(),?,?,?)');
        $sth->bindParam(1, $name);
        $sth->bindParam(2, $review);
        $sth->bindParam(3, $stars);
        $sth->bindParam(4, $product->id);
        $sth->execute();
}
?>
