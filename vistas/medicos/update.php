<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php include "../../includes/header.php"; ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM medicos where id = $id";
$medico = DataBase::one($query);
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8">

                <form action="<?= Helpers::baseURL("libraries/medicos/update_medico.php?id=$id") ?>" method="post">

                    <?php include "_form.php"; ?>

                </form>


        </div>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>
