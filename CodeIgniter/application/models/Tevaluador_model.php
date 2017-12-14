<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tevaluador_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function nuevo_tevaluador($datos){
		$datosBD = array(
			'DESC_TEvaluador' => $datos['DESC_TEvaluador'],
		);
		$this->db->insert('TEvaluador', $datosBD);
	}

	public function obtener_tevaluadores(){
		$query = $this->db->get('TEvaluador');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function obtener_tevaluador($id){
		$where = $this->db->where('ID_TEvaluador',$id);
		$query = $this->db->get('TEvaluador');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}	

	public function actualizar_tevaluador($id,$datos){
		$datosBD = array(
			'DESC_TEvaluador' => $datos['DESC_TEvaluador'],
		);
		$this->db->where('ID_TEvaluador',$id);
		$this->db->update('TEvaluador', $datosBD);
	}	

		public function borrar_tevaluador($id){
		$this->db->where('ID_TEvaluador',$id);
		$this->db->delete('TEvaluador');
	}	
}


?>