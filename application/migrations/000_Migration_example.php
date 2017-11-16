<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Migration_Migration_example extends CI_Migration {
    public function __construct()
    {
        parent::__construct();

        $db = array("db" => $this->db);
        $this->load->library("migration_tools", $db);
    }
    //------------------------------------------------------------------------------------------------------------------
    public function up() {
        // Deshabilitar las llaver foráneas
        $this->_disable_key_checks();

        // Aca pon tu codigo para modificar la DB

        // Terminada la migración, volver a habilitar las llaves foráneas
        $this->_enable_key_checks();
    }
    //------------------------------------------------------------------------------------------------------------------
    public function down() {
        // Deshabilitar las llaver foráneas
        $this->_disable_key_checks();

        // Acá pon tu código para revertir tus cambios

        // Terminada la migración, volver a habilitar las llaves foráneas
        $this->_enable_key_checks();
    }
}