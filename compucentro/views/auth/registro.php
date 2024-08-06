<main class="auth">
     <h2 class="auth__heading"><?php echo $titulo; ?></h2>
     <p class="auth__texto">Registrar</p>

     <?php
       require_once __DIR__ .'/../templates/alertas.php'
     ?>

     <form method="POST"  class="formulario" action="/registro">
     <div class="formulario__campo">
            <label for="nombre" class="formulario__label" for="">Nombre</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu Nombre"
                id="nombre"
                name="nombre"
                value="<?php echo s($usuario->nombre); ?>"
            />
        </div>
        <label for="apellido" class="formulario__label" for="">Apellido</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu Apellido"
                id="apellido"
                name="apellido"
                value="<?php echo s($usuario->apellido); ?>"
            />
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label" for="">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
                value="<?php echo s($usuario->email); ?>"
            />
        </div>
        <div class="formulario__campo">
            <label form="password" class="formulario__label" for="">Password</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu Password"
                id="password"
                name="password"
            />
        </div>
        <div class="formulario__campo">
            <label form="password2" class="formulario__label" for="">Repetir Password</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Repetir Password"
                id="password2"
                name="password2"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
     </form>

     <div class="acciones">
         <a href="/" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
         <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
     </div>
</main>


