<nav>
  <ul>
    <li><a href="./">Principal</a></li>

<?php if (isset($_SESSION["auth"])) {?>
    <li><a href= "<?php echo "./usuario/listar/" . $_SESSION['auth']['id']?>">Perfil</a></li>
<?php } ?>

    <li><a href="./produto">Produto</a></li>

    <li><a href="./carrinho">Carrinho</a></li>

    <li><a href="./categoria">Categoria</a></li>

    <?php if (isset($_SESSION["auth"])) { ?>
    <li><a href="./login/logout">Logout</a></li>
    <?php } ?>

    <?php if (!isset($_SESSION["auth"])) { ?>
    <li><a href="./login">Login</a></li>
    <?php } ?>
 
    <li><a href="./usuario/adicionar">Cadastre-se</a></li>
  </ul>
</nav>