<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php

$query = "select * from medicos";
$medicos = DataBase::all($query);
$query = "select * from medicos where id = 1";
$medicoOne = DataBase::one($query)

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
                    <th scope="col">Especialidad</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($medicos as $indice => $doctor): ?>
                    <tr>
                        <th scope="row"><?= $indice+1 ?></th>
                        <td><?=$doctor->nombre?></td>
                        <td><?=$doctor->edad?></td>
                        <td><?=$doctor->especialidad?></td>
                        <td>
                            <a href="<?= Helpers::baseURL("vistas/medicos/update.php?id={$doctor->id}") ?>" class="btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="<?= Helpers::baseURL('vistas/medicos/create.php') ?>">Alta</a>
    </div>

</div>



<?php include "../../includes/footer.php"; ?>

