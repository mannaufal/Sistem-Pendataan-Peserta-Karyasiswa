<?php  

/**
 * 
 */
class Print_peserta extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Print_peserta_model');
	}

	public function index()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$data['peserta'] = $this->Print_peserta_model->getAllPeserta();
		$this->load->view('print_peserta', $data);
	}
}
?>