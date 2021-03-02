<?php  

/**
 * 
 */
class Peserta_model extends CI_Model
{
	function getAllPeserta()
	{
		return $this->db->get('peserta')->result_array();
	}

	function getPeserta($limit, $start)
	{
		$this->db->order_by('nama','ASC');
		return $this->db->get('peserta', $limit, $start)->result_array();
	}

	function countOnPeserta ()
	{
		return $this->db->get('peserta')->num_rows();
	}

	function tambah_peserta($nip, $nama, $nama_universitas, $bidang_studi, $jenjang_studi, $lama_studi, $tahun_selesai, $keterangan)
	{
		$data = array ( 
			'nip' => $nip,
			'nama' => $nama,
			'nama_universitas' => $nama_universitas,
			'bidang_studi' => $bidang_studi,
			'jenjang_studi' => $jenjang_studi,
			'lama_studi' => $lama_studi,
			'tahun_selesai' => $tahun_selesai,
			'keterangan' => $keterangan,
		);
		$this->db->insert('peserta', $data);
	}

	function hapus_peserta($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->delete('peserta');
	}

	public function getPesertaByNip ($nip)
	{
		return $this->db->get_where('peserta', ['nip' => $nip])->row_array();
	}

	function ambildatapeserta($nip)
	{
		return $this->db->get_where('peserta', array('nip' => $nip));
	}

	function ubah_peserta()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nama_universitas' => $this->input->post('nama_universitas'),
			'bidang_studi' => $this->input->post('bidang_studi'),
			'jenjang_studi' => $this->input->post('jenjang_studi'),
			'lama_studi' => $this->input->post('lama_studi'),
			'tahun_selesai' => $this->input->post('tahun_selesai'),
			'keterangan' => $this->input->post('keterangan')
		];
		$this->db->where('nip', $this->input->post('nip'));
		$this->db->update('peserta', $data);
	}

	function cariDataPeserta()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		return $this->db->get('peserta')->result_array();
	}
}

?>