<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-15 01:03:16
  from 'C:\xampp\htdocs\web2-tpe\templates\motos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6168b734a0e3e6_68231938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfcfb493630298bb5fb744e9eb74deee295b9fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2-tpe\\templates\\motos.tpl',
      1 => 1634171003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168b734a0e3e6_68231938 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <div class="formFiltar">
          <form action="filtrar" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Filtrar por tipo:</label>
          <select name="id_tipo_moto">
            <option value=0> Ninguno </option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
             <option value=<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id;?>
> <?php echo $_smarty_tpl->tpl_vars['tipo']->value->terreno;?>
 </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          <div >
            <button type="submit" id="">Filtrar</button>
          </div> 
        </form>
        </div>
    <section>
        <table>
            <thead>
                <tr>
                 <th> Color </th>
                <th>Cilindrada</th>
                <th>Tanque</th>
                <th>Tipo</th>
                <th class="Editar">Editar</th>
                <th class="Eliminar">Eliminar</th>
                </tr>
            </thead>
            <tbody id="tabla" class="body-tabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['motos']->value, 'moto');
$_smarty_tpl->tpl_vars['moto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moto']->value) {
$_smarty_tpl->tpl_vars['moto']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->color;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->cilindrada;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->tanque;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->terreno;?>
</td>
                <td><button class="btnEditar"><a href="edit/<?php echo $_smarty_tpl->tpl_vars['moto']->value->id;?>
">Editar</a></button></td>
                <td><button class="btnEliminar"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['moto']->value->id;?>
">Borrar</a></button></td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </section>


     <form action="insert" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Ingresar color:</label> <input type="text" name="color" id="inputColor" placeholder="Blanco">
          <label for="">Ingresar cilindrada:</label> <input type="text" name="cilindrada" id="inputCilindrada" placeholder="150">
          <label for="">Ingresar tanque:</label> <input type="text" name="tanque" id="inputTanque" placeholder="10">
          <label for="">Ingresar tipo:</label>
          <select name="id_tipo_moto">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
             <option value=<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id;?>
> <?php echo $_smarty_tpl->tpl_vars['tipo']->value->terreno;?>
 </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          <div >
            <button type="submit" id="">Agregar</button>
          </div> 
        </form>



    <section id=muestraMotos>
        <div class="ns200">
            <h3>Bajaj ns 200 FI</h3>
            <img src="images/NS200.png" alt="ns200">
        </div>
        <div class="z400">
            <h3>Kawasaki Z400</h3>
            <img src="images/Kawasaki-Z400.jpg" alt="z400">
        </div>
        <div class="tnt600">
            <h3>Benelli TNT 600GT</h3>
            <img src="images/tnt-600gt.jpg" alt="TNT 600GT">
        </div>
    </section>

     <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
