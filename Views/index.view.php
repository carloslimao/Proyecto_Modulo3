<?php require 'parciales/header.view.php'; ?>
<h1>Cursos</h1>



<table class="table table-striped" id="cursos" border="1">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Docente</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($cursos as $curso): ?>
        <tr>
            <td><?= $curso->nombre ?></td>
            <td><?= $curso->descripcion ?></td>
            <td><?= $curso->docente ?></td>
            <td>
                <form style="display: inline;" action="/inscripcion/crear/<?= $curso->id ?>/<?= $_SESSION['id'] ?>" method="post">
                    <button type="submit">Inscribirse</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<hr>
<h2>CURSOS INSCRITOS</h2>
<table class="table table-striped" id="cursos" border="1">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Docente</th>
        <th>Fecha de Inscripción</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($cursosInscritos as $curso): ?>
        <tr>
            <td><?= $curso->curso->nombre ?></td>
            <td><?= $curso->curso->descripcion ?></td>
            <td><?= $curso->curso->docente ?></td>
            <td><?= $curso->fecha ?></td>
            <td>
                <form style="display: inline;" action="/inscripcion/eliminar/<?= $curso->id ?>/<?= $_SESSION['id'] ?>" method="post">
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>



<?php require 'parciales/footer.view.php'; ?>