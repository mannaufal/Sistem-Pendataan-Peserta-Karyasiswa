<?php  

/**
 * 
 */
class Jenjang_studi extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Jenjang_studi_model');
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
		$config['base_url'] = 'http://localhost/Sikahut/Jenjang_studi/index';
		$config['total_rows'] = $this->Jenjang_studi_model->countOnJenjangStudi();
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
		$data['jenjang'] = $this->Jenjang_studi_model->getJenjangStudi($config['per_page'], $data['start']);
		$this->load->view('jenjang_studi', $data);
	}

	function cari_jenjang_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Jenjang_studi/index';
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
		$data['jenjang'] = $this->Jenjang_studi_model->getJenjangStudi($config['per_page'], $data['start']);
		if ($this->input->post('keyword'))
		{
			$data['jenjang'] = $this->Jenjang_studi_model->cariDataJenjang();
			$this->load->view('cari/cari_jenjang', $data);
		}
	}

	function tambah_jenjang_studi_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->load->view('tambah/tambah_jenjang_studi');
	}

	function tambah_jenjang_studi()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->form_validation->set_rules('jenjang_studi', 'Jenjang Studi', 'required|alpha_numeric_spaces|is_unique[jenjang_studi.nama_jenjang_studi]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('tambah/tambah_jenjang_studi');
		}
		else
		{
			$nama_jenjang_studi = $this->input->post('jenjang_studi');
			$this->Jenjang_studi_model->tambah_jenjang_studi($nama_jenjang_studi);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('jenjang_studi');
		}
		
	}

	function hapus_jenjang_studi()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$id = $this->uri->segment(3);
		$this->Jenjang_studi_model->hapus_jenjang_studi($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('jenjang_studi');
	}

	public function ubah_jenjang_studi($id)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		
		$data['jenjang'] = $this->Jenjang_studi_model->getJenjangById($id);

		$this->form_validation->set_rules('nama_jenjang_studi','Jenjang Studi','required|alpha_numeric_spaces|is_unique[jenjang_studi.nama_jenjang_studi]');
	
		if($this->form_validation->run() == false){
		$this->load->view('edit/edit_jenjang_studi',$data);
		}
		else{
			
		$this->Jenjang_studi_model->ubah_jenjang_studi();
		$this->session->set_flashdata('flash', 'Diubah');
			redirect('jenjang_studi');
		}
	}

}

?>