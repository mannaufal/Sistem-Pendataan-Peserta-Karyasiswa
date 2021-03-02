<?php 

/**
 * 
 */
class Bidang_studi_model extends CI_Model
{
	function getAllBidangStudi()
	{
		$this->db->order_by('nama_bidang_studi', 'ASC');
		return $this->db->get('bidang_studi')->result_array();
	}

	function getBidangStudi($limit, $start)
	{
		$this->db->order_by('nama_bidang_studi', 'ASC');
		return $this->db->get('bidang_studi', $limit, $start)->result_array();
	}

	function countOnBidangStudi()
	{
		return $this->db->get('bidang_studi')->num_rows();
	}

	function tambah_bidang_studi($nama_bidang_studi)
	{
		$data = array (
			'nama_bidang_studi' => $nama_bidang_studi
		);
		$this->db->insert('bidang_studi', $data);
	}

	function hapus_bidang_studi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('bidang_studi');
	}

	public function getBidangById($id)
	{
		return $this->db->get_where('bidang_studi', ['id' => $id])->row_array();
	}

	function ambildatabidangstudi($id)
	{
		return $this->db->get_where('bidang_studi', array('id' => $id));
	}

	function ubah_bidang_studi()
	{
		$data = [
            'nama_bidang_studi' => $this->input->post('nama_bidang_studi')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('bidang_studi', $data);
	}

	function cariDataBidang()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_bidang_studi', $keyword);
		return $this->db->get('bidang_studi')->result_array();
	}
}

?>