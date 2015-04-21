<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
	 
	public function index()
	{

		$this->load->view("pages/login");
			
	}

	public function insertUsers()
	{

		$email = $this->input->post('mail');
		$wachtwoord = $this->input->post('wachtwoord');

		$isEmail    =   filter_var( $email, FILTER_VALIDATE_EMAIL );

		if ((empty($email))||(empty($wachtwoord))||(empty($email)&&empty($wachtwoord)) ) 
		{

			$this->session->set_flashdata('fout', 'Oeps, Gelieve de onderstaande gegevens in te vullen.');
			redirect('registreren');

		}

		if (!$isEmail) 
		{

			$this->session->set_flashdata('fout', 'Oeps, het E-mailadres heeft niet het juiste formaat.');
			redirect('registreren');

		}

		else
		{

			$id = $this->input->post('mail');
			$this->db->where('email',$id);
			$query = $this->db->get('gebruikers');
	
			if ($query->num_rows() > 0)
			{

				$this->session->set_flashdata('fout', 'Oeps, Uw e-mailadres staat al in onze database. Gelieve een ander e-mailadres in te vullen.');
				redirect('registreren');

			}

			else
			{

				$hashed_wachtwoord = md5($wachtwoord);
				$hashed_gebruiker  = md5($email);

				$data= array(
							'email' => $email,
							'wachtwoord' => $hashed_wachtwoord
							);
	
				$this->db->insert('gebruikers',$data);

				$this->setCookie();

				$this->setSession();

				$this->session->set_flashdata('succes', 'Welkom, u bent geregistreerd.');
				redirect("dashboard");

			}
		}
	}

	public function login()
	{

		$email = $this->input->post('mail');
		$wachtwoord = $this->input->post('wachtwoord');

		$hashed_wachtwoord = md5($wachtwoord);

		$this->db->select('email', 'wachtwoord');
		$this->db->from('gebruikers');
		$this->db->where('email', $email);
		$this->db->where('wachtwoord', $hashed_wachtwoord);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query ->num_rows() == 1) 
		{
			
				$this->setCookie();

				$this->setSession();				

				$this->session->set_flashdata('succes', 'Welkom, u bent ingelogd.');
				redirect("dashboard");

		}
			
		else
		{

			$this->session->set_flashdata('fout', 'Uw email en/of wachtwoord is niet juist.');
			redirect("login");

		}
		

	}

	public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie("authenticated");
		redirect("home");
	}

	public function setCookie()
	{

		$this->load->helper('cookie');

		$email = $this->input->post('mail');
		$wachtwoord = $this->input->post('wachtwoord');

		$hashed_gebruiker  = md5($email);

		$cookie = array(
                   'name'   => 'authenticated',
                   'value'  => $hashed_gebruiker.$email,
                   'expire' => '3600'
               );
 
		set_cookie($cookie); 

	}

	public function setSession()
	{

		$email = $this->input->post('mail');
		$id = $this->db->get_where('gebruikers', array('email' => $email));

		var_dump($id);

		$this->load->library('session');

		$session= array(
					'name'=>'sessie',
					'value' => $email,

				);

		$this->session->set_userdata($session);

	}
}

?>