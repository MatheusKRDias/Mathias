<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "MathiasShop");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}