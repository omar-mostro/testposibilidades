<?php
include "../DataBase.php";
include "../Helpers.php";

$db = new DataBase();


$nombre = empty($_POST['nombre']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING));
$edad = empty($_POST['edad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['edad']), FILTER_SANITIZE_STRING));
$especialidad = empty($_POST['especialidad']) ? 'null' : $db->link->real_escape_string(filter_var(trim($_POST['especialidad']), FILTER_SANITIZE_STRING));

$query = "INSERT INTO medicos (nombre, edad,especialidad) 
          value ('$nombre', $edad, '$especialidad')";

try {
    DataBase::guardar($query);
    header('Location: '.Helpers::baseURL('vistas/medicos'));
} catch (Exception $e) {

    die($e->getMessage());
}