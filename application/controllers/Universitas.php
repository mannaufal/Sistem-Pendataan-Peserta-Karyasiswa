<?php  

/**
 * 
 */
class Universitas extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Negara_model');
		$this->load->model('Universitas_model');
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
		$config['base_url'] = 'http://localhost/Sikahut/Universitas/index';
		$config['total_rows'] = $this->Universitas_model->countOnUniversitas();
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
		$data['univ'] = $this->Universitas_model->getUniversitas($config['per_page'], $data['start']);
		$this->load->view('universitas', $data);
	}

	function cari_universitas_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Universitas/cari_univeristas_view/index';
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
		$data['univ'] = $this->Universitas_model->getUniversitas($config['per_page'], $data['start']);

		if ($this->input->post('keyword'))
		{
			$data['univ'] = $this->Universitas_model->cariDataUniversitas();
			$this->load->view('cari/cari_universitas', $data);
		}
		
	}

	function tambah_universitas_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['negara'] = $this->Negara_model->getAllNegara();
		$this->load->view('tambah/tambah_universitas_view', $data);
	}

	function tambah_universitas()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->form_validation->set_rules('nama_universitas', 'Nama Universitas', 'required|is_unique[universitas.nama_universitas]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['negara'] = $this->Negara_model->getAllNegara();
			$this->load->view('tambah/tambah_universitas_view', $data); 
		}
		else
		{
			$nama_universitas = $this->input->post('nama_universitas');
			$nama_negara = $this->input->post('nama_negara');
			$alamat = $this->input->post('alamat');
			$this->Universitas_model->tambah_universitas($nama_universitas, $nama_negara, $alamat);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('universitas');
		}
	}

	function hapus_universitas()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$id = $this->uri->segment(3);
		$this->Universitas_model->hapus_universitas($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('universitas');
	}

	function ubah_universitas($id)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['univ'] = $this->Universitas_model->getUniversitasById($id);
		$data['negara'] = $this->Negara_model->getAllNegara();

		$this->form_validation->set_rules('nama_universitas', 'Nama Universitas', 'required|is_unique[universitas.nama_universitas]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit/edit_universitas',$data);
		}

		else
		{
			$this->Universitas_model->ubah_universitas();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('universitas');
		}
		
	}

	function detail_universitas($id)
	{
		$data['universitas'] = $this->Universitas_model->getUniversitasByKode($id);
		$this->load->view('detail/detail_universitas', $data);
	}
}

?>