<?php  

/**
 * 
 */
class Home extends CI_Controller
{
	
	function index()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('User');
		}
		$this->load->view('home');
	}
}

?>