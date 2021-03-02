<?php  

/**
 * 
 */
class Sktb extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Sktb_model');
		$this->load->model('Peserta_model');
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
		$config['base_url'] = 'http://localhost/Sikahut/Sktb/index';
		$config['total_rows'] = $this->Sktb_model->countOnSktb();
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
		$data['sktb_1'] = $this->Sktb_model->getSktb($config['per_page'], $data['start']);
		$this->load->view('sktb_view', $data);
	}

	function cari_sktb_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Sktb/index';
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
		$data['sktb_1'] = $this->Sktb_model->getSktb($config['per_page'], $data['start']);
		if ($this->input->post('keyword'))
		{
			$data['sktb_1'] = $this->Sktb_model->cariDataSktb();
			$this->load->view('cari/cari_sktb', $data);
		}
		
	}

	function tambah_sktb($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['peserta'] = $this->Peserta_model->getPesertaByNip($nip);

		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|is_unique[sktb.nip]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_sktb', 'No. SKTB', 'required');
		$this->form_validation->set_rules('mulai_pendidikan', 'Mulai Pendidikan', 'required');
		$this->form_validation->set_rules('rencana_selesai', 'Rencana Selesai', 'required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('tambah/tambah_sktb_view',$data);
		}

		else
		{
			$this->Sktb_model->tambah_sktb();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('sktb');
		}
	}

	function hapus_sktb()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$nip = $this->uri->segment(3);
		$this->Sktb_model->hapus_sktb($nip);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('sktb');
	}

	function ubah_sktb($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['sktb_1'] = $this->Sktb_model->getSktbByNip($nip);

		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_sktb', 'No. SKTB', 'required');
		$this->form_validation->set_rules('mulai_pendidikan', 'Mulai Pendidikan', 'required');
		$this->form_validation->set_rules('rencana_selesai', 'Rencana Selesai', 'required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('edit/edit_sktb',$data);
		}

		else
		{
			$this->Sktb_model->ubah_sktb();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('sktb');
		}
	}

	function detail_sktb($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['sktb_1'] = $this->Sktb_model->getSktbByNip($nip);
		$this->load->view('detail/detail_sktb', $data);
	}
}

?>