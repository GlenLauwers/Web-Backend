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

<p>Hebt u nog geen account? Klik dan <a href="registreren">hier om je te registreren</a>.</p>
<?php if( $this->session->flashdata('fout')): ?>
	<p class="error"><?php echo $this->session->flashdata('fout');?></p>
<?php endif ?>


<form method="POST" action="Users/login">
	<label for="mail">E-mailadres:</label>
		<input type="text" name="mail" id="name">

	<label for="wachtwoord">Wachtwoord:</label>
		<input type="password" name="wachtwoord" id="wachtwoord">

	<input type="submit" name="login" value="Inloggen">
</form>