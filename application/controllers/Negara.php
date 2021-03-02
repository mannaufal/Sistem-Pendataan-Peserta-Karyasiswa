<?php 

/**
 * 
 */
class Negara extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Negara_model');
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
		$config['base_url'] = 'http://localhost/Sikahut/Negara/index';
		$config['total_rows'] = $this->Negara_model->countOnNegara();
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
		$data['negara_1'] = $this->Negara_model->getNegara($config['per_page'], $data['start']);
		$this->load->view('negara', $data);
	}

	function cari_negara_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Negara/index';
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
		$data['negara_1'] = $this->Negara_model->getNegara($config['per_page'], $data['start']);
		if ($this->input->post('keyword'))
		{
			$data['negara_1'] = $this->Negara_model->cariDataNegara();
			$this->load->view('cari/cari_negara', $data);
		}
	}

	function tambah_negara_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->load->view('tambah/tambah_negara_view');
	}

	function tambah_negara()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->form_validation->set_rules('kode_negara', 'Kode Negara', 'required|numeric|is_unique[negara.kode_negara]');
		$this->form_validation->set_rules('negara', 'Nama Negara', 'required|is_unique[negara.negara]|alpha_numeric_spaces');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('tambah/tambah_negara_view');
		}
		else
		{
			$kode_negara = $this->input->post('kode_negara');
			$negara = $this->input->post('negara');
			$this->Negara_model->tambah_negara($kode_negara, $negara);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('negara');
		}
		
	}

	function hapus_negara()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$id = $this->uri->segment(3);
		$this->Negara_model->hapus_negara($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('negara');
	}

	function ubah_negara($kode_negara)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['negara_1'] = $this->Negara_model->getNegaraByKode($kode_negara);

		$this->form_validation->set_rules('kode_negara', 'Kode Negara', 'required|numeric');
		$this->form_validation->set_rules('negara', 'Negara', 'required|alpha_numeric_spaces|is_unique[negara.negara]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit/edit_negara', $data);
		}
		else
		{
			$this->Negara_model->ubah_negara();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('negara');
		}	
	}
}

?>