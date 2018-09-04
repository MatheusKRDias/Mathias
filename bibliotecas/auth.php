<?php

define('AUTENTICADOR', true);

function authLogin($login, $passwd) {
    $sql = "SELECT NomeAdminFROM Admin";
    $resultado = mysqli_query(conn(), $sql);
    $nomeadmin = $resultado; 
     $sql = "SELECT SenhaAdmin FROM Admin";
    $resultadosenha = mysqli_query(conn(), $sql);
    $senhaadmin = $resultadosenha; 
    if ($login === $nomeadmin && $passwd == $senhaadmin) {
        $_SESSION["auth"] = array("user" => $nomeadmin, "role" => $nomeadmin);
        return true;
    }
    if ($login === "user" && $passwd == "123") {
        $_SESSION["auth"] = array("user" => "user", "role" => "user");
        return true;
    }
    return false;
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}


function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
