<?php
include "../DataBase.php";
include "../Helpers.php";

$db = new DataBase();


$nombre = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING));
$direccion = empty($_POST['direccion']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['direccion']), FILTER_SANITIZE_STRING));
$estado = empty($_POST['estado']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['estado']), FILTER_SANITIZE_STRING));

$query = "INSERT INTO hospitales (nombre, direccion, estado) 
          value ('$nombre', '$direccion', '$estado')";

try {
    DataBase::guardar($query);
    header('Location: '.Helpers::baseURL('vistas/hospitales'));
} catch (Exception $e) {

    die($e->getMessage());
}