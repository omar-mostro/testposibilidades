<?php include '../../libraries/DataBase.php'; ?>
<?php include "../../libraries/Helpers.php"; ?>
<?php include "../../includes/header.php"; ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM hospitales where id = $id";
$paciente = DataBase::one($query);
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8">

                <form action="<?= Helpers::baseURL("libraries/hospitales/update_hospital.php?id=$id") ?>" method="post">

                    <?php include "_form.php"; ?>

                </form>


        </div>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>
