<?php
	if (isset($_COOKIE['auth_authenticated'])) 
	{
		$isvalid = $this->UserModel->validate();
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css">
	<title><?= $titel ?></title>
</head>

<body>
	<header class="group"><div><p class="titel">Todo - app</p></div>
		
		<nav>
			<ul>
				<li><a href="home">Home</a></li>

				<?php if ((!isset($_COOKIE['auth_authenticated'])) || (!$isvalid)): ?>

					<li><a href="login">Login</a></li>
					<li><a href="registreren">Registreren</a></li>

				<?php endif ?>
				

				<?php if ((isset($_COOKIE['auth_authenticated'])) && ($isvalid)):?>

					<li><a href="dashboard">Dashboard</a></li>
					<li><a href="todos">Todos</a></li>
					<li><a href="Users/logout">Uitloggen</a></li>
					
				<?php endif ?>

			</ul>
		</nav>
	</header>

	<div class="content">
		<h1><?= $titel ?></h1>



<?php if ((isset($_COOKIE['auth_authenticated'])) && ($isvalid)): ?>
	<p>U bent ingelogd als "<?= $this->session->userdata('value') ?>".</p>
<?php endif ?>

<?php if (isset($isvalid)):?>
	<?php if (!$isvalid): ?>
		<p class="error">Tja, dat komt ervan als je probeert te hacken. :-) Gelieve eerst de aangemaakte cookie te verwijderen.</p>
	<?php endif ?>
	
<?php endif ?>


