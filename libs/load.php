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

function signup($username,$password,$email,$phone)
{
    $servername="mysql.selfmade.ninja";
    $user="thushi";
    $pass="Thushiselfmadelabsmysql";
    $dbname="thushi_auth";

    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ('$username', '$password', '$email', '$phone', '0', '1');";
    $error=false;
    if ($conn->query($sql) === TRUE) {
        $error=false;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $error=$conn->error;
    }

    $conn->close();
    return $error;
}
?>