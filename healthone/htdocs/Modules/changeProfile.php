<?php
function changeProfile():bool {
    global $pdo;

    $email=$_SESSION['user']->email;
    $firstName=filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $firstName=filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!empty($firstName) && !empty($lastName)) {
        $sth = $pdo->prepare('UPDATE `user` SET `first_name`=f, `last_name`=: WHERE `email`=:e');

        $sth->bindValue(":f",$firstName);
        $sth->bindValue(":l",$lastName);
        $sth->bindValue(":e",$email);
        $sth->execute();

        $_SESSION['user']->first_name=$firstName;
        $_SESSION['user']->last=$lastName;
        return false;
    } else {
        return false;
    }
}

?>