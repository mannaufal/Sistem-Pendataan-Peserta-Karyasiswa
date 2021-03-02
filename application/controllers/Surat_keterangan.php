<?php  

/**
 * 
 */
class Surat_keterangan extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Sk_model');
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
		$config['base_url'] = 'http://localhost/Sikahut/Surat_keterangan/index';
		$config['total_rows'] = $this->Sk_model->countOnSuratKeterangan();
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
		$data['s_keterangan'] = $this->Sk_model->getSuratKeterangan($config['per_page'], $data['start']);
		$this->load->view('sk_view', $data);
	}

	function cari_sk_view()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		//Pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = 'http://localhost/Sikahut/Surat_keterangan/index';
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
		$data['s_keterangan'] = $this->Sk_model->getSuratKeterangan($config['per_page'], $data['start']);
		if ($this->input->post('keyword'))
		{
			$data['s_keterangan'] = $this->Sk_model->cariDataSk();
			$this->load->view('cari/cari_sk', $data);
		}
		
	}

	function tambah_sk($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['peserta'] = $this->Peserta_model->getPesertaByNip($nip);

		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|is_unique[sk.nip]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('tambah/tambah_sk_view',$data);
		}
		else
		{
			$this->Sk_model->tambah_sk();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Surat_keterangan');
		}	
	}

	function hapus_sk()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$id = $this->uri->segment(3);
		$this->Sk_model->hapus_sk($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Surat_keterangan');
	}

	function ubah_sk($nip)
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['sk'] = $this->Sk_model->getSkByNip($nip);

		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit/edit_sk', $data);
		}

		else
		{
			$this->Sk_model->ubah_sk();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Surat_keterangan');
		}
	}
}

?>