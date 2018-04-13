<?php

include "env.php";

class DataBase
{

    /**Atributos**/
    private $usuario = env::USUARIO_DB;
    private $password = env::PASSWORD_DB;
    private $host = env::HOST_DB;
    private $bd = env::DATABASE_DB;

    public $link;

    /**Metodos**/
    public function __construct()
    {

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
            $this->link = new mysqli($this->host, $this->usuario, $this->password, $this->bd);
            $this->link->set_charset("utf8");
        } catch (Exception $e) {
            die("Error al conectarse a la base datos {$e->getMessage()} " . __FILE__ . ' ' . __LINE__);
        }
    }

    public function selectAll($query)
    {

        if (!$data = $this->link->query($query)) {
            die($this->link->error . __FILE__ . ' ' . __LINE__);
        }


        while ($rows = $data->fetch_object()) {

            $result[] = $rows;
        }

        return $result;


    }

    public function selectOne($query)
    {

        if (!$data = $this->link->query($query)) {
            die($this->link->error . __LINE__);
        }

        $result = $data->fetch_object();
        mysqli_free_result($data);
        return $result;

    }

    public static function one($query)
    {
        $db = new DataBase();
        return $db->selectOne($query);
    }

    /**
     * @param string $bd
     */
    public static function all($query)
    {
        $bd = new DataBase();
        return $bd->selectAll($query);
    }

    /**
     * Update
     * Si no se puede realizar la actualización se retorna el error
     * @throws Exception
     */
    public function updateOrCreate($query)
    {
        $update_row = $this->link->query($query);

        //Validate Insert
        if (!$update_row) {
            throw new Exception("Error: {$this->link->error} " .__FILE__ ." ". __LINE__, $this->link->errno);
        }

    }

    /**
     * @param $query
     * @throws Exception
     */
    public static function guardar($query)
    {
        $db = new DataBase();
        $db->updateOrCreate($query);
    }



    /**
     * @param $query
     * @return int
     * @throws Exception
     */
    public
    function delete($query)
    {
        $this->link->query($query);

        //Validate delete
        //Cuando no se realizo ningun delete porque no coincidieron los parametros where del delete
        if ($this->link->affected_rows == 0) {
            throw new Exception("Error: {$this->link->error} " .__FILE__ ." ". __LINE__, 1);
        } //cuando la consulta retorna un error
        elseif ($this->link->affected_rows == -1) {
            //return $this->link->affected_rows;
            return $this->link->errno;
        }
    }

}