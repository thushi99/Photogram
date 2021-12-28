<?php

function load_templete($name){
    print("Including ".__DIR__."../_templetes/$name.php");
    include __DIR__."/../_templetes/$name.php";
}
?>