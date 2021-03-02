<?php 

/**
 * 
 */
class Print_peserta_model extends CI_Model
{
	
	function getAllPeserta()
	{
		return $this->db->get('peserta')->result_array();
	}
}

?>