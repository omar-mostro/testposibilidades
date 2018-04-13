<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php

$query = "select * from hospitales";
$pacientes = DataBase::all($query);
$query = "select * from hospitales where id = 1";
$pacientetest = DataBase::one($query)

?>
<?php include "../../includes/header.php"; ?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Estado</th>
					<th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pacientes as $indice => $paciente): ?>
                    <tr>
                        <th scope="row"><?= $indice ?></th>
                        <td><?=$paciente->nombre?></td>
                        <td><?=$paciente->direccion?></td>
                        <td><?=$paciente->estado?></td>
                        <td>
                            <a href="<?= Helpers::baseURL("vistas/hospitales/update.php?id={$paciente->id}") ?>" class="btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="<?= Helpers::baseURL('vistas/hospitales/create.php') ?>">Alta</a>
    </div>

</div>



<?php include "../../includes/footer.php"; ?>

