<?php  

/**
 * 
 */
class Universitas_model extends CI_Model
{
	function getAllUniversitas()
	{
		$this->db->order_by('nama_universitas','ASC');
		return $this->db->get('universitas')->result_array();
	}

	function getUniversitas($limit, $start)
	{
		$this->db->order_by('nama_universitas','ASC');
		return $this->db->get('universitas', $limit, $start)->result_array();
	}

	function getUniversitasById($id)
	{
		return $this->db->get_where('universitas', ['id' => $id])->row_array();
	}

	function countOnUniversitas ()
	{
		return $this->db->get('universitas')->num_rows();
	}

	function tambah_universitas($nama_universitas, $nama_negara, $alamat)
	{
		$data = array ( 
			'nama_universitas' => $nama_universitas,
			'nama_negara' => $nama_negara,
			'alamat' => $alamat
		);
		$this->db->insert('universitas', $data);
	}

	function hapus_universitas($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('universitas');
	}

	function getUniversitasByKode($id)
	{
		return $this->db->get_where('universitas', ['id' => $id])->row_array();
	}

	function ambildatauniversitas($id)
	{
		return $this->db->get_where('universitas', array('id' => $id));
	}

	function ubah_universitas()
	{
		$data = [
            'nama_universitas' => $this->input->post('nama_universitas'),
            'nama_negara' => $this->input->post('nama_negara'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('universitas', $data);
	}
	
	function cariDataUniversitas()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_universitas', $keyword);
		return $this->db->get('universitas')->result_array();
	}
}
?>