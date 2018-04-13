<?php
include "../DataBase.php";
include "../Helpers.php";

$db = new DataBase();


$fecha = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['fecha']), FILTER_SANITIZE_STRING));
$hora = empty($_POST['edad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['hora']), FILTER_SANITIZE_STRING));
$hospital = empty($_POST['genero']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['hospital']), FILTER_SANITIZE_STRING));
$medico= empty($_POST['clave']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['medico']), FILTER_SANITIZE_STRING));
$paciente= empty($_POST['clave']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['paciente']), FILTER_SANITIZE_STRING));
$query = "INSERT INTO hospitales (fecha, hora, hospitales_id, medicos_id, pacientes_id)
          value ('$fecha', $hora, '$hospital', '$medico','$paciente')";

try {
    DataBase::guardar($query);
    header('Location: '.Helpers::baseURL('vistas/citas'));
} catch (Exception $e) {

    die($e->getMessage());
}
