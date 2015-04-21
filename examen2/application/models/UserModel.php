<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
	
	public function viewUsers()
	{
		$query= $this->db->get('gebruikers');
		return $query->result();
	}

	public function validate()
	{
		$session= $this->session->userdata('value');
		$hashed_gebruiker  = md5($session);
		$cookie= $_COOKIE['auth_authenticated'];

		$isvalid = false;



		if (isset($cookie)) 
		{
			if ($cookie === $hashed_gebruiker.$session) 
			{
				$isvalid = true;
			}

			else
			{
				$isvalid = false;
			}
		}

		return $isvalid;
	}
}