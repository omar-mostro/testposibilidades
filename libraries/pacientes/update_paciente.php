<?php
include "../DataBase.php";
include "../Helpers.php";
session_start();

$db = new DataBase();

$id = $_GET['id'];

$nombre = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING));
$edad = empty($_POST['edad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['edad']), FILTER_SANITIZE_STRING));
$genero = empty($_POST['genero']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['genero']), FILTER_SANITIZE_STRING));
$clave = empty($_POST['clave']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['clave']), FILTER_SANITIZE_STRING));

$query = "UPDATE pacientes SET 
nombre='$nombre', 
edad=$edad, 
genero='$genero', 
clave='$clave' 
where id = $id";


try {
    DataBase::guardar($query);
    $_SESSION['success'] = 'Exito al actualizar los datos';
    header('Location: '.Helpers::baseURL("vistas/pacientes/update.php?id=$id"));
} catch (Exception $e) {

    die($e->getMessage());
}