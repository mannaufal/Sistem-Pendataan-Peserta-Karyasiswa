<?php

/**
 * 
 */
class Bidang_studi extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Bidang_studi_model');
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
		$config['base_url'] = 'http://localhost/Sikahut/Bidang_studi/index';
		$config['total_rows'] = $this->Bidang_studi_model->countOnBidangStudi();
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
		$data['bidang'] = $this->Bidang_studi_model->getBidangStudi($config['per_page'], $data['start']);
		$this->load->view('bidang_studi', $data);
	}

	function cari_bidang_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Bidang_studi/index';
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
		$data['bidang'] = $this->Bidang_studi_model->getBidangStudi($config['per_page'], $data['start']);
		if ($this->input->post('keyword')) 
		{
			$data['bidang'] = $this->Bidang_studi_model->cariDataBidang();
			$this->load->view('cari/cari_bidang', $data);
		}
	}

	function tambah_bidang_studi_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->load->view('tambah/tambah_bidang_studi');
	}

	function tambah_bidang_studi()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->form_validation->set_rules('nama_bidang_studi', 'Nama Bidang Studi', 'required|alpha_numeric_spaces|is_unique[bidang_studi.nama_bidang_studi]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('tambah/tambah_bidang_studi');
		}
		else
		{
			$nama_bidang_studi = $this->input->post('nama_bidang_studi', TRUE);
			$this->Bidang_studi_model->tambah_bidang_studi($nama_bidang_studi);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('bidang_studi');
		}
	}

	function hapus_bidang_studi()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$id = $this->uri->segment(3);
		$this->Bidang_studi_model->hapus_bidang_studi($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('bidang_studi');
	}

	public function ubah_bidang_studi($id)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}	
		$data['bidang'] = $this->Bidang_studi_model->getBidangById($id);

		$this->form_validation->set_rules('nama_bidang_studi','Bidang Studi','required|alpha_numeric_spaces|is_unique[bidang_studi.nama_bidang_studi]');
	
		if($this->form_validation->run() == false){
		$this->load->view('edit/edit_bidang_studi',$data);
		}
		else{
			
		$this->Bidang_studi_model->ubah_bidang_studi();
		$this->session->set_flashdata('flash', 'Diubah');
			redirect('bidang_studi');
		}
	}
}

?>