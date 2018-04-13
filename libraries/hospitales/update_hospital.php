<?php
include "../DataBase.php";
include "../Helpers.php";

$db = new DataBase();

$id = $_GET['id'];

$nombre = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING));
$direccion = empty($_POST['direccion']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['direccion']), FILTER_SANITIZE_STRING));
$estado = empty($_POST['estado']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['estado']), FILTER_SANITIZE_STRING));

$query = "UPDATE hospitales SET 
nombre='$nombre', 
direccion='$direccion', 
estado='$estado'

WHERE id = ".$id;


try {
    DataBase::guardar($query);
    header('Location: '.Helpers::baseURL("vistas/hospitales/update.php?id=$id"));
} catch (Exception $e) {

    die($e->getMessage());
}