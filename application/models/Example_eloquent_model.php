<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Este modelo usa Eloquent, no usa la interfaz de modelos de Codeigniter CI_Model

use Illuminate\Database\Eloquent\Model as Eloquent;

class Example_eloquent_model extends Eloquent{
    // Asignaciones -------------------------------------------------------
    // definir que atributos son asignables (por seguridad)

    // Ligar el modelo a la tabla ---------------------------------
    // Definir la tabla y el campo llave de la misma

	protected $table = 'example_table';
	protected $primaryKey = 'example_key';

    // Definir relaciones --------------------------------------------------
}