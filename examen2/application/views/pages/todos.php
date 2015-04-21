<?php

if (isset($_COOKIE['auth_authenticated'])) 
	{
		$isvalid = $this->UserModel->validate();
	}

if ((!isset($_COOKIE['auth_authenticated'])) || (!$isvalid))
	{
		redirect('home');
	}


	$database_TODO = $this->TodoModel->viewdata_TODO();
	$database_Done = $this->TodoModel->viewdata_Done();

?>
<?php if( $this->session->flashdata('fout')): ?>
	<p class="error"><?php echo $this->session->flashdata('fout');?></p>
<?php endif ?>

<?php if ((empty($database_TODO)) && (empty($database_Done))): ?>
	<p>U hebt geen todos in de lijst staan.</p>
<?php endif ?>


<?php if (!isset($_GET['toevoegen'])): ?>
	<a href="todos?toevoegen">Todo toevoegen</a>
<?php endif ?>


<?php if ((!empty($database_TODO)) || (!empty($database_Done))): ?>

	<h2>Nog te doen</h2>

	<?php if (empty($database_TODO)): ?>
		<p>Proficiat, al de todos zijn gedaan.</p>
	<?php endif ?>

	<form action="Todo/nog_te_doen" method="POST">
	<ul>	

		<?php foreach ($database_TODO as $value): ?>
			
				<li><?= $value->beschrijving ?></li>
				<button type="submit" name="status_wijzigen" value="<?= $value->id ?>">Status wijzigen</button>
				<button type="submit" name="verwijderen" value="<?= $value->id ?>">Verwijderen</button>
	
	<?php endforeach ?>

</ul>
</form>
		

<h2>Gedaan</h2>

<?php if (empty($database_Done)): ?>
		<p>U hebt nog geen todos gedaan. Werk aan de winkel.</p>
	<?php endif ?>
<form action="Todo/gedaan" method="POST">
<ul>	

	<?php foreach ($database_Done as $value): ?>
	
								
			<li><?= $value->beschrijving ?></li>
				<button type="submit" name="status_wijzigen" value="<?= $value->id ?>">Status wijzigen</button>
				<button type="submit" name="verwijderen" value="<?= $value->id ?>">Verwijderen</button>


	<?php endforeach ?>

</ul>
</form>
<?php endif ?>

<?php if (isset($_GET['toevoegen'])): ?>
	

	<form action="Todo/insertdata" method="POST">

		<label>Beschrijving:</label>
			<input type="text" name="beschrijving" id="beschrijving">
	
		<input type="submit" name="beschrijving_toevoegen" id="beschrijving_toevoegen">

	</form>
<?php endif ?>