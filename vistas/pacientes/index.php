<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php

$query = "select * from pacientes";
$pacientes = DataBase::all($query);
$query = "select * from pacientes where id = 1";
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
                    <th scope="col">Edad</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Acciones</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($pacientes as $indice => $paciente): ?>
                    <tr>
                        <th scope="row"><?= $indice ?></th>
                        <td><?=$paciente->nombre?></td>
                        <td><?=$paciente->edad?></td>
                        <td><?=$paciente->genero?></td>
                        <td><?=$paciente->clave?></td>
                        <td>
                            <a href="<?= Helpers::baseURL("vistas/pacientes/update.php?id={$paciente->id}") ?>" class="btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="<?= Helpers::baseURL('vistas/pacientes/create.php') ?>">Alta</a>
    </div>

</div>



<?php include "../../includes/footer.php"; ?>

