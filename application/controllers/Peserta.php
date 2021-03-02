<?php  

/**
 * 
 */
class Peserta extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Universitas_model');
		$this->load->model('Jenjang_studi_model');
		$this->load->model('Bidang_studi_model');
		$this->load->model('Peserta_model');
		$this->load->model('Coba_model');
	}

	function index()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Peserta/index';
		$config['total_rows'] = $this->Peserta_model->countOnPeserta();
		$config['per_page'] = 5;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['fist_tag_open'] = '<li class="page-item">';
		$config['fist_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['peserta'] = $this->Peserta_model->getPeserta($config['per_page'], $data['start']);
		$this->load->view('peserta', $data);
	}

	function cari_peserta_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Peserta/cari_peserta_view/index';
		$config['per_page'] = 5;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['fist_tag_open'] = '<li class="page-item">';
		$config['fist_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['peserta'] = $this->Peserta_model->getPeserta($config['per_page'], $data['start']);
		if ($this->input->post('keyword')) 
		{
			$data['peserta'] = $this->Peserta_model->cariDataPeserta();
			$this->load->view('cari/cari_peserta', $data);
		}
	}

	function tambah_peserta_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['univ'] = $this->Universitas_model->getAllUniversitas();
		$data['jenjang'] = $this->Jenjang_studi_model->getAllJenjangStudi();
		$data['bidang'] = $this->Bidang_studi_model->getAllBidangStudi();
		$data['ket'] = ['Lulus', 'Perpanjangan', 'Drop Out', 'Mengundurkan Diri', 'Meninggal Dunia', 'Dicabut SK', 'Dikeluarkan', 'Sedang Mengikuti'];
		$this->load->view('tambah/tambah_peserta_view', $data);

	}

	function tambah_peserta()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|is_unique[peserta.nip]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['univ'] = $this->Universitas_model->getAllUniversitas();
			$data['jenjang'] = $this->Jenjang_studi_model->getAllJenjangStudi();
			$data['bidang'] = $this->Bidang_studi_model->getAllBidangStudi();
			$data['ket'] = ['Lulus', 'Perpanjangan', 'Drop Out', 'Mengundurkan Diri', 'Meninggal Dunia', 'Dicabut SK', 'Dikeluarkan', 'Sedang Mengikuti'];
			$this->load->view('tambah/tambah_peserta_view',$data);
		}
		else
		{
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$nama_universitas = $this->input->post('nama_universitas');
			$bidang_studi = $this->input->post('bidang_studi');
			$jenjang_studi = $this->input->post('jenjang_studi');
			$lama_studi = $this->input->post('lama_studi');
			$tahun_selesai = $this->input->post('tahun_selesai');
			$keterangan = $this->input->post('keterangan');
			$this->Peserta_model->tambah_peserta($nip, $nama, $nama_universitas, $bidang_studi, $jenjang_studi, $lama_studi, $tahun_selesai, $keterangan);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('peserta');
		}
		
	}

	function hapus_peserta()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$nip = $this->uri->segment(3);
		$this->Peserta_model->hapus_peserta($nip);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('peserta');
	}

	function ubah_peserta($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}

		$data['peserta'] = $this->Peserta_model->getPesertaByNip($nip);
		$data['univ'] = $this->Universitas_model->getAllUniversitas();
		$data['jenjang'] = $this->Jenjang_studi_model->getAllJenjangStudi();
		$data['bidang'] = $this->Bidang_studi_model->getAllBidangStudi();
		$data['ket'] = ['Lulus', 'Perpanjangan', 'Drop Out', 'Mengundurkan Diri', 'Meninggal Dunia', 'Dicabut SK', 'Dikeluarkan', 'Sedang Mengikuti'];

		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit/edit_peserta', $data);
		}

		else
		{
			$this->Peserta_model->ubah_peserta();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('peserta');
		}
	}

	function detail_peserta($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['peserta'] = $this->Peserta_model->getPesertaByNip($nip);
		$this->load->view('detail/detail_peserta', $data);
	}
}

?>