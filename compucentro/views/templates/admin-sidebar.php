<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ?  'dashboard__enlace--actual' : ''; ?>">

            <i class="fa-solid fa-house"></i>
            <span class="dashboard__menu-texto">
                inicio
            </span>
        </a>
        <a href="/admin/ordenes" class="dashboard__enlace <?php echo pagina_actual('/ordenes') ?  'dashboard__enlace--actual' : ''; ?>">
            <i class="fa-solid fa-microphone dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Ordenes
            </span>
        </a>
        
    </nav>
</aside>