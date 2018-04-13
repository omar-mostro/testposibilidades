<?php
include "../DataBase.php";
include "../Helpers.php";
session_start();
$db = new DataBase();


$nombre = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING));
$edad = empty($_POST['edad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['edad']), FILTER_SANITIZE_STRING));
$genero = empty($_POST['genero']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['genero']), FILTER_SANITIZE_STRING));
$clave = empty($_POST['clave']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['clave']), FILTER_SANITIZE_STRING));

$query = "INSERT INTO pacientes (nombre, edad, genero, clave) 
          value ('$nombre', $edad, '$genero', '$clave')";

try {
    DataBase::guardar($query);
    $_SESSION['success'] = 'Exito al crear el usuario';
    header('Location: '.Helpers::baseURL('vistas/pacientes'));
} catch (Exception $e) {

    die($e->getMessage());
}