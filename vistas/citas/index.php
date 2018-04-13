+<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php

$query = "select c.id, c.fecha, c.hora, h.nombre as hospital, m.nombre as medico, p.nombre as paciente  from citas c
          inner join hospitales h on h.id=c.hospitales_id
          inner join medicos m on m.id=c.medicos_id
          inner join pacientes p on p.id=c.pacientes_id";
$citas = DataBase::all($query);


?>
<?php include "../../includes/header.php"; ?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Médico</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Acciones</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($citas as $indice => $cita): ?>
                    <tr>
                        <th scope="row"><?= $indice ?></th>
                        <td><?=$cita->fecha?></td>
                        <td><?=$cita->hora?></td>
                        <td><?=$cita->hospital?></td>
                        <td><?=$cita->medico?></td>
                        <td><?=$cita->paciente?></td>
                        <td>
                            <a href="<?= Helpers::baseURL("vistas/citas/update.php?id={$cita->id}") ?>" class="btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="<?= Helpers::baseURL('vistas/citas/create.php') ?>">Alta</a>
    </div>

</div>



<?php include "../../includes/footer.php"; ?>
