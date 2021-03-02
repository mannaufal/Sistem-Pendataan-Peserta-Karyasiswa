<?php  

/**
 * 
 */
class Sktb_model extends CI_Model
{
	 function getAllSktb()
	{
		return $this->db->get('sktb')->result_array();
	}

	function getSktb($limit, $start)
	{
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('sktb', $limit, $start)->result_array();
	}

	function countOnSktb ()
	{
		return $this->db->get('sktb')->num_rows();
	}

	function tambah_sktb()
	{
		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'no_sktb' => $this->input->post('no_sktb'),
			'mulai_pendidikan' => $this->input->post('mulai_pendidikan'),
			'rencana_selesai' => $this->input->post('rencana_selesai'),
			'no_sktb_perpanjangan_1' => $this->input->post('no_sktb_perpanjangan_1'),
			'mulai_perpanjangan_1' => $this->input->post('mulai_perpanjangan_1'),
			'selesai_perpanjangan_1' => $this->input->post('selesai_perpanjangan_1'),
			'no_sktb_perpanjangan_2' => $this->input->post('no_sktb_perpanjangan_2'),
			'mulai_perpanjangan_2' => $this->input->post('mulai_perpanjangan_2'),
			'selesai_perpanjangan_2' => $this->input->post('selesai_perpanjangan_2'),
		];
		$this->db->insert('sktb', $data);
	}

	function hapus_sktb($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->delete('sktb');
	}

	function getSktbByNip($nip)
	{
		return $this->db->get_where('sktb', ['nip' => $nip])->row_array();
	}

	function ambildatasktb($nip)
	{
		return $this->db->get_where('sktb', array('nip' => $nip));
	}

	function ubah_sktb()
	{
		$data = [
            'nama' => $this->input->post('nama'),
			'no_sktb' => $this->input->post('no_sktb'),
			'mulai_pendidikan' => $this->input->post('mulai_pendidikan'),
			'rencana_selesai' => $this->input->post('rencana_selesai'),
			'no_sktb_perpanjangan_1' => $this->input->post('no_sktb_perpanjangan_1'),
			'mulai_perpanjangan_1' => $this->input->post('mulai_perpanjangan_1'),
			'selesai_perpanjangan_1' => $this->input->post('selesai_perpanjangan_1'),
			'no_sktb_perpanjangan_2' => $this->input->post('no_sktb_perpanjangan_2'),
			'mulai_perpanjangan_2' => $this->input->post('mulai_perpanjangan_2'),
			'selesai_perpanjangan_2' => $this->input->post('selesai_perpanjangan_2')
        ];
        $this->db->where('nip', $this->input->post('nip'));
        $this->db->update('sktb', $data);
	}

	function cariDataSktb()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		return $this->db->get('sktb')->result_array();
	}
}

?>