<?php session_start(); ?>

<?php if (isset($_SESSION['success'])): ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="fa fa-check-circle"></i> Holy guacamole!</strong> <?= $_SESSION['success'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php unset($_SESSION['success']) ?>
<?php endif ?>