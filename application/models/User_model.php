<?php  

/**
 * 
 */
class User_model extends CI_Model
{
	public function tambah_user($id,$username,$password)
	{
		$data = [
			'id' => $id,
			'username' => $username,
			'password' => $password
		];
		$this->db->insert('user', $data);
	}
}

?>