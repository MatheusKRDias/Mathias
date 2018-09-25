<?php
require_once("modelo/usuarioModelo.php");

define('AUTENTICADOR', true);



function authLogin($login, $passwd) {
   $log = logar($login, $passwd);

   if (!empty($log)) {
        $_SESSION["auth"] = array(
            "id" => $log["IdUsuario"],
            "user" => $log["TipoUsuario"], 
            "role" => $log["TipoUsuario"],
            "nome" => $log["NomeUsuario"]);
        return true;   
   }else{
       return false;
   }
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
