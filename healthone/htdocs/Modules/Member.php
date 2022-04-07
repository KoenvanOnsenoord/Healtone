<?php

function isMember():bool {
    if(isset($_SESSION['user'])&&!empty($SESSION['user'])); {
        $user=$_SESSION['user'];
        if ($user->role === "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}