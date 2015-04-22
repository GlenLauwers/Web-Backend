<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller
{
	public function insertdata()
	{
		if (empty($this->input->post('beschrijving'))) 
		{		
			$this->session->set_flashdata('fout', 'Uw beschrijving is leeg.');
			redirect("todos");
		}
		
		else
		{
			$id = $this->session->userdata('value');
			$this->db->where('email',$id);
			$query = $this->db->get('gebruikers');
			$query = $query->result();

			$data= array(
						'e-mail_gebruiker' => $query[0]->id,
						'beschrijving' => $this->input->post('beschrijving'),
						'actief' => 0
							);
	
			$this->db->insert('todos',$data);
			redirect("todos");
		}
	}

	public function nog_te_doen($id)
	{		
		if (isset($_POST['status_wijzigen'])) 
		{
			$id = $this->input->post('status_wijzigen');
			$data= array(
						'actief' => 1
						);
						
			$this->db->where('id',$id);
			$this->db->update('todos',$data);
			redirect("todos");
		}

		if (isset($_POST['verwijderen']))
		{
			$this->verwijderen();
		}
	}
		
	public function gedaan($id)
	{		
		if (isset($_POST['status_wijzigen'])) 
		{
			$id = $this->input->post('status_wijzigen');
			$data= array(
						'actief' => 0
						);

			$this->db->where('id',$id);
			$this->db->update('todos',$data);
			redirect("todos");
		}

		if (isset($_POST['verwijderen']))
		{
			$this->verwijderen();
		}
	}

	public function verwijderen($id)
	{
		$id 	= 	$this->input->post('verwijderen');
		$data	= 	array(
							'actief' => 2
						);
						
		$this->db->where('id',$id);
		$this->db->update('todos',$data);
		redirect("todos");
	}
	
}

?>
