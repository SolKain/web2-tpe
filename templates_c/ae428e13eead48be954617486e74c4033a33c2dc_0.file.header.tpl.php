<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-15 01:03:14
  from 'C:\xampp\htdocs\web2-tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6168b73266c116_64408572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae428e13eead48be954617486e74c4033a33c2dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2-tpe\\templates\\header.tpl',
      1 => 1634164522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168b73266c116_64408572 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motos Tandil</title>
    <base href="<?php echo BASE_URL;?>
">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section class="encabezado">
            <h1>Tandil Motos</h1>
            <div class="btn_menu"><img src="images/menu.png" alt="menu"></div>
        </section>

        <nav class="menu">
            <ul class="botonera">
                <li><a href=index>Home</a></li>
                <li><a href=motos>Motos</a></li>
                <li><a href=tipos>Tipos</a></li>
                <?php if (!$_smarty_tpl->tpl_vars['logout']->value) {?>
                    <li><a href=login>Login</a></li>
                <?php }?>                <?php if ($_smarty_tpl->tpl_vars['logout']->value) {?>
                    <li><a href=logout>Logout</a></li>
                <?php }?>
            </ul>
        </nav>
    </header>
<?php }
}
