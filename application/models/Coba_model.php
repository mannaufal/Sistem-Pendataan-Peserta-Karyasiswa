<?php  

/**
 * 
 */
class Coba_model extends CI_Model
{
	
	function tambah_data($nip, $nama)
	{
		$data = array ( 
			'nip' => $nip,
			'nama' => $nama
		);
		$this->db->insert('coba',$data);
	}
}

?>