<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site de testes">
	<meta name="author" content="Site das bolachas">
	<title><?= $title; ?></title>
	<link href="<?base_url('resources/css/style.css') ?>" rel="stylesheet">
	<style>
		.parag {
			font-family: sans-serif;
		}
		
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background: #3498db;
			color: white;
			text-decoration: none;
			border-radius: 6px;
			margin: 6px
		}
		
		.btn:hover {
			background: #2980b9;
		}
		
	</style>
</head>
<body>
	<div class="parag">
		<p>Atendimentos gerais, Fisioterapia, Pediatria, Ortopedia...</p>
		<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam ante id lectus placerat laoreet. Quisque id ante eu elit lacinia egestas. Mauris pulvinar eu purus ac ultrices. Mauris porttitor blandit dui, nec tempor nibh rhoncus cursus. Maecenas feugiat nec velit in pellentesque. Aliquam elementum diam quis fringilla porta. Sed sed hendrerit elit. Integer urna libero, consequat sed finibus at, tincidunt sit amet orci. Phasellus quis lectus in lectus dictum commodo. Nulla vel consectetur tellus. Ut id fermentum sem, vitae porttitor dolor. Aliquam sit amet diam est. Mauris et auctor sem. Donec in elementum sem. Cras ut tincidunt lacus. </p>
	</div>
	<div class="botoes">
		<nav>
			<a href="medicos" class="btn">Serviços Médicos<a/>
			<a href="" class="btn">Meus Agendametos<a/>
			<a href="" class="btn">Nosso Hospital<a/>
			<a href="" class="btn">Perguntas Frequêntes<a/>
		</nav>
	</div>
	<br/>
	<div class="galeria">
		<img src="https://dummyimage.com/300x300/000/fff&text=eu+sou+um+dummy+img">
		<img src="https://dummyimage.com/300x300/000/fff&text=eu+sou+um+dummy+img">		
		<img src="https://dummyimage.com/300x300/000/fff&text=eu+sou+um+dummy+img">		
		<img src="https://dummyimage.com/300x300/000/fff&text=eu+sou+um+dummy+img">		
		<img src="https://dummyimage.com/300x300/000/fff&text=eu+sou+um+dummy+img">		
	</div>
	<hr/>
	<div class="tabelas">
		
	</div>
	<hr/>
</body>