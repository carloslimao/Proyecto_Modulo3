<nav>
    <a href="/">Inicio</a>


    <?php if (Core\Auth::verificar()): ?>
        <span><?= $_SESSION['nombre'] ?></span>
        <form style="display: inline;" action="/cerrar-sesion" method="post">
            <button>Salir</button>
        </form>
    <?php endif; ?>

</nav>