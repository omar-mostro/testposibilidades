<?php


class Helpers

{

    const PACIENTE_MASCULINO = 'masculino';
    const PACIENTE_FEMENINO = 'femenino';


    public static $test;
    public static function baseURL($additionalPath)
    {
        $prefix = "testposibilidades/";

        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] == 'on') ? "https://" : "http://".$_SERVER["SERVER_NAME"].'/'.$prefix.$additionalPath;



    }

}