<?php
	if (isset($_COOKIE['auth_authenticated'])) 
	{
		$isvalid = $this->UserModel->validate();
	}

	if (isset($_COOKIE['auth_authenticated']))
	{
		if ($isvalid) 
		{
			redirect('dashboard');
		}

		else
		{
			redirect('home');
		}
		
	}

?>

<?php if( $this->session->flashdata('fout')): ?>
	<p class="error"><?php echo $this->session->flashdata('fout');?></p>
<?php endif ?>

<form action="Users/insertUsers" name="registreren" method="POST"> 
  <label for="mail">E-mailadres:</label>
    <input type="text" name="mail" id="mail">

  <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="wachtwoord" id="wachtwoord">

  <input type="submit" name="registreren" id="registreren" value="registreren">
</form>

