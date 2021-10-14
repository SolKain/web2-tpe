 {include file="templates/header.tpl"}

         <div class="formFiltar">
          <form action="filtrar" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Filtrar por tipo:</label>
          <select name="id_tipo_moto">
            <option value=0> Ninguno </option>
            {foreach from = $tipos item = $tipo}
             <option value={$tipo->id}> {$tipo->terreno} </option>
            {/foreach}
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
            {foreach from = $motos item = $moto}
                <tr>
                <td>{$moto->color}</td>
                <td>{$moto->cilindrada}</td>
                <td>{$moto->tanque}</td>
                <td>{$moto->terreno}</td>
                <td><button class="btnEditar"><a href="edit/{$moto->id}">Editar</a></button></td>
                <td><button class="btnEliminar"><a href="delete/{$moto->id}">Borrar</a></button></td>
                {/foreach}
            </tbody>
        </table>
    </section>


     <form action="insert" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Ingresar color:</label> <input type="text" name="color" id="inputColor" placeholder="Blanco">
          <label for="">Ingresar cilindrada:</label> <input type="text" name="cilindrada" id="inputCilindrada" placeholder="150">
          <label for="">Ingresar tanque:</label> <input type="text" name="tanque" id="inputTanque" placeholder="10">
          <label for="">Ingresar tipo:</label>
          <select name="id_tipo_moto">
            {foreach from = $tipos item = $tipo}
             <option value={$tipo->id}> {$tipo->terreno} </option>
            {/foreach}
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

     {include file="templates/footer.tpl"}