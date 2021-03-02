<?php  

/**
 * 
 */
class Sk_model extends CI_Model
{
	function getAllSuratKeterangan()
	{
		return $this->db->get('sk')->result_array();
	}

	function getSuratKeterangan($limit, $start)
	{
		$this->db->order_by('nama','ASC');
		return $this->db->get('sk', $limit, $start)->result_array();
	}

	function countOnSuratKeterangan ()
	{
		return $this->db->get('sk')->num_rows();
	}

	function tambah_sk()
	{
		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'sk_setjen' => $this->input->post('sk_setjen'),
			'sk_menteri' => $this->input->post('sk_menteri')
		];
		$this->db->insert('sk',$data);
	}

	function hapus_sk($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->delete('sk');
	}

	function getSkByNip($nip)
	{
		return $this->db->get_where('sk', ['nip' => $nip])->row_array();
	}

	function ambildatask($nip)
	{
		return $this->db->get('sk', array('nip' => $nip));
	}

	function ubah_sk()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'sk_setjen' => $this->input->post('sk_setjen'),
			'sk_menteri' => $this->input->post('sk_menteri')
		];
		$this->db->where('nip', $this->input->post('nip'));
		$this->db->update('sk',$data);
	}

	function cariDataSk()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		return $this->db->get('sk')->result_array();
	}
}
?>