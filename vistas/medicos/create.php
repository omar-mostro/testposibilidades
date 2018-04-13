<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php include "../../includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8">

            <form action="<?= Helpers::baseURL('libraries/pacientes/crear_paciente.php') ?>" method="post">
                <?php include "_form.php"; ?>
            </form>

        </div>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>
