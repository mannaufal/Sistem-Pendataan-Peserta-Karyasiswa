<?php 

/**
 * 
 */
class Jenjang_studi_model extends CI_Model
{
	function getAllJenjangStudi()
	{
		$this->db->order_by('nama_jenjang_studi', 'ASC');
		return $this->db->get('jenjang_studi')->result_array();
	}

	function getJenjangStudi($limit, $start)
	{
		$this->db->order_by('nama_jenjang_studi', 'ASC');
		return $this->db->get('jenjang_studi', $limit, $start)->result_array();
	}

	function countOnJenjangStudi ()
	{
		return $this->db->get('jenjang_studi')->num_rows();
	}

	function tambah_jenjang_studi($nama_jenjang_studi)
	{
		$data = array ( 
			'nama_jenjang_studi' => $nama_jenjang_studi
		);
		$this->db->insert('jenjang_studi', $data);
	}

	function hapus_jenjang_studi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jenjang_studi');
	}

	public function getJenjangById ($id)
	{
		return $this->db->get_where('jenjang_studi', ['id' => $id])->row_array();
	}

	function ambildatajenjangstudi($id)
	{
		return $this->db->get_where('jenjang_studi', array('id' => $id));
	}

	public function ubah_jenjang_studi(){
          $data = [
            'nama_jenjang_studi' => $this->input->post('nama_jenjang_studi'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jenjang_studi', $data);
    }

	function cariDataJenjang()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_jenjang_studi', $keyword);
		return $this->db->get('jenjang_studi')->result_array();
	}
}

?>