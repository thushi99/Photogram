<?php

function load_templete($name){
    include __DIR__."/../_templetes/$name.php";
}

function validate_credientials($username,$password){
    if($username=="thushi@selfmade.ninja" && $password=="123456")
        return true;
    else
        return false;
}
?>