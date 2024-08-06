<main class="auth">
     <h2 class="auth__heading"><?php echo $titulo; ?></h2>
     <p class="auth__texto">Recuperar acceso</p>

     <?php
       require_once __DIR__ .'/../templates/alertas.php'
     ?>

     <form method="POST" class="formulario" action="/olvide">
        <div class="formulario__campo">
            <label form="email" class="formulario__label" for="">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            />
        </div>
        

        <input type="submit" class="formulario__submit" value="Enviar">
     </form>

     <div class="acciones">
         <a href="/" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
         <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? Obtener una</a>
     </div>
</main>


