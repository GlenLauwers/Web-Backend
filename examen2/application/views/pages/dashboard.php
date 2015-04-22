<?php
	if (isset($_COOKIE['auth_authenticated'])) 
	{
		$isvalid = $this->UserModel->validate();
	}

	if ((!isset($_COOKIE['auth_authenticated'])) || (!$isvalid))
	{
		redirect('home');
	}

?>

<?php if( $this->session->flashdata('succes')): ?>
	<p class="success"><?php echo $this->session->flashdata('succes');?></p>
<?php endif ?>

<p><a href="todos">Klik hier</a> om je todos te bekijken.</p>
