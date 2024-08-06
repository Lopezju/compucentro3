<fieldset>
    <legend>Informacion Personal</legend>

    <div class="formulario__campo">
        <label class="formulario__label" for="nombre">Nombre:</label>
        <input
             type="text"
             class="formulario__input"
             id="nombre"
             name="nombre"
             placeholder="Nombre Cliente"
             value="<?php echo $cliente->nombre ?? ''; ?>"
        />
    </div>
    <div class="formulario__campo">
        <label class="formulario__label" for="telefono">Telefono:</label>
        <input
             type="phone"
             class="formulario__input"
             id="telefono"
             name="telefono"
             placeholder="Telefono Cliente"
             value="<?php echo $cliente->telefono ?? ''; ?>"
        />
    </div>

    <input type="submit" value="Nuevo Cliente">
</fieldset>