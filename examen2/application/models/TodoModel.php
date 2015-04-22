<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TodoModel extends CI_Model
{
	public function viewdata_TODO()
	{
		$id = $this->userinfo()[0]->id;
		$this->db->where('actief',0);
		$this->db->where('e-mail_gebruiker', $id);

		$query= $this->db->get('todos');
		return $query->result();
	}

	public function viewdata_Done()
	{
		$id = $this->userinfo()[0]->id;
		$this->db->where('actief',1);
		$this->db->where('e-mail_gebruiker', $id);

		$query= $this->db->get('todos');
		return $query->result();
	}

	public function userinfo()
	{
		$id = $this->session->userdata('value');
		$this->db->where('email',$id);
		
		$query= $this->db->get('gebruikers');
		return $query->result();
	}

}

?>