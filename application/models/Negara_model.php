<?php  

/**
 * 
 */
class Negara_model extends CI_Model
{
	
	function getAllNegara()
	{
		$this->db->order_by('negara', 'ASC');
		return $this->db->get('negara')->result_array();
	}

	function getNegara($limit, $start)
	{
		$this->db->order_by('negara', 'ASC');
		return $this->db->get('negara', $limit, $start)->result_array();
	}

	function countOnNegara()
	{
		return $this->db->get('negara')->num_rows();
	}

	function tambah_negara($kode_negara, $negara)
	{
		$data = array ('kode_negara' => $kode_negara,'negara' => $negara);
		$this->db->insert('negara', $data);
	}

	function hapus_negara($kode_negara)
	{
		$this->db->where('kode_negara', $kode_negara);
		$this->db->delete('negara');
	}

	function getNegaraByKode ($kode_negara)
	{
		return $this->db->get_where('negara', ['kode_negara' => $kode_negara])->row_array();
	}

	function ambildatanegara($kode_negara)
	{
		return $this->db->get_where('negara', array('kode_negara' => $kode_negara));
	}

	function ubah_negara()
	{
		$data = [
            'negara' => $this->input->post('negara'),
        ];
        $this->db->where('kode_negara', $this->input->post('kode_negara'));
        $this->db->update('negara', $data);
	}

	function cariDataNegara()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('negara', $keyword);
		return $this->db->get('negara')->result_array();
	}
}

?>