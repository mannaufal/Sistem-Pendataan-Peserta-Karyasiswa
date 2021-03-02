<?php  

/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	}

	function index()
	{
		if ($this->session->userdata('username'))
		{
			redirect('Home');
		}
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['username' => $username])->row_array();

		if($user)
		{
			//cek password
			if(password_verify($password, $user['password']))
			{
				$data = [
					'username' => $user['username'],
					'password' => $user['password']
				];
				$this->session->set_userdata($data);
				redirect('Home');
			}
			else
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password</div>');
				redirect('User');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Username</div>');
			redirect('User');
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		redirect('User');
	}
}

?>