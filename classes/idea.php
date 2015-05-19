<?php

class idea extends object_standard {

    //attribute variables
    protected $nombre;
    protected $descripcion;
    protected $etapa;
    protected $necesidad;
    protected $cliente;
    protected $miembro;
    protected $reunion;
    //components
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array("nombre" => array(),
            "descripcion" => array(),
            "etapa" => array(),
            "necesidad" => array("foreign_name" => "n_i",
                "foreign" => "necesidad", "foreign_attribute" => "codigo"),
            "cliente" => array("foreign_name" => "c_i",
                "foreign" => "cliente", "foreign_attribute" => "identificacion"),
            "miembro" => array("foreign_name" => "m_i",
                "foreign" => "empleado", "foreign_attribute" => "cedula"),
            "reunion" => array("foreign_name" => "r_i",
                "foreign" => "reunion", "foreign_attribute" => "codigo"));
    }

    public function primary_key() {
        return array("nombre");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            case "necesidad":
                switch ($rel_name) {
                    case "n_i":
                        return array("necesidad");
                        break;
                }
                break;
            case "cliente":
                switch ($rel_name) {
                    case "c_i":
                        return array("cliente");
                        break;
                }
                break;
            case "miembro":
                switch ($rel_name) {
                    case "m_i":
                        return array("miembro");
                        break;
                }
                break;
            case "reunion":
                switch ($rel_name) {
                    case "r_i":
                        return array("reunion");
                        break;
                }
                break;
            default:
                break;
        }
    }

}

?>