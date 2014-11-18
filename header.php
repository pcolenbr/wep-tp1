<!DOCTYPE html>

<html>

<?php //$site_url = 'http://www.pedro.dreamt.com.br'; ?>
<?php $site_url = 'http://localhost/tp1'; ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="<?php echo $site_url?>/images/favicon.png">

	<script src="<?php echo $site_url?>/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo $site_url?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $site_url?>/js/dt_disableJQueryAjax.js"></script>
	<script src="<?php echo $site_url?>/js/jquery.mobile-1.4.4.min.js"></script>	
	<script src="<?php echo $site_url?>/js/jquery.maskedinput.js"></script>	
	<script src="<?php echo $site_url?>/js/util.js"></script>

	<link rel="stylesheet" href="<?php echo $site_url?>/css/bootstrap.min.css" type="text/css" />	
	<link rel="stylesheet" href="<?php echo $site_url?>/css/767.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $site_url?>/css/992.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $site_url?>/css/1200.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $site_url?>/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $site_url?>/css/carousel.css" type="text/css" />
</head>

<body>
	<header>

		<img class="img-responsive logo" src="<?php echo $site_url?>/images/logo.png" >

		<nav>
			<ul class="menu">
				<li><a href="#div-inicio">Início</a></li>
				<li><a href="#div-projetos">Projetos</a></li>
				<li><a href="#div-curriculo">Currículo</a></li>
				<li><a href="#div-contato">Contato</a></li>
			</ul>
		</nav>
	</header>
