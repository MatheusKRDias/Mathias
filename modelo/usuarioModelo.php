<?php

function logar($nome, $senha) {
    $sql = "SELECT * FROM usuario WHERE NomeUsuario = '$nome' AND Senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $log = mysqli_fetch_array($resultado);
    
    return $log;
}

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE IdUsuario = $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $senha) {
    $sql = "INSERT INTO usuario (nomeusuario, email, senha, tipoUsuario) 
			VALUES ('$nome', '$email', '$senha', 'user')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $email) {
    $sql = "UPDATE usuario SET NomeUsuario = '$nome', Email = '$email' WHERE IdUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE IdUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
