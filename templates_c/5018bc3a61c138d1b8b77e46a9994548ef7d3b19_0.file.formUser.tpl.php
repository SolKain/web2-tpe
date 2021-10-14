<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-15 01:03:23
  from 'C:\xampp\htdocs\web2-tpe\templates\formUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6168b73babcea0_78518815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5018bc3a61c138d1b8b77e46a9994548ef7d3b19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2-tpe\\templates\\formUser.tpl',
      1 => 1634162085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168b73babcea0_78518815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Iniciar sesion:</h2>
<form action="verify" method="POST">
    <input type="text" name="usuario" id="id" placeholder="Ingrese su usuario" required>
    <input type="password" name="contrasenia" id="password" placeholder="Ingrese su contraseña" required>
    <button type="submit" id="">Aceptar</button>
</form>


</div>
    <h4 class= error>  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>

<h3>Crear usuario: </h3>
<button><a href="registrarse">Registrarse</a></button>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
