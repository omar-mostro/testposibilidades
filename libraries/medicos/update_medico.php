<?php
include "../DataBase.php";
include "../Helpers.php";

$db = new DataBase();

$id = $_GET['id'];

$nombre = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING));
$edad = empty($_POST['edad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['edad']), FILTER_SANITIZE_STRING));
$especialidad = empty($_POST['especialidad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['especialidad']), FILTER_SANITIZE_STRING));

$query = "UPDATE medicos SET 
nombre='$nombre', 
edad=$edad, 
especialidad='$especialidad'
where id = $id";


try {
    DataBase::guardar($query);
    header('Location: '.Helpers::baseURL("vistas/medicos/update.php?id=$id"));
} catch (Exception $e) {

    die($e->getMessage());
}