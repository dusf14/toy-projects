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
		.projeto {
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
	<div class="projeto">
		<div class="container">
			<h1>Bem vindo á nossa lista de médicos</h1>
		</div>	
		<div class="geral">
			<h2>Clínica Geral</h2>
			<hr/>
			<h3>Bloco: 1</h3>
			<?php foreach ($medicos as $m): ?>
			<tr>
				<td><?= $m->medico_id ?></td>
				<td><?= $m->nome ?></td>
				<td><?= $m->categoria ?></td>
			</tr>
			<?php endforeach; ?>
			<a class="btn" href="./agendamentos" >Agendar Consulta</a>
		</div>
		<div class="Ortopedia">
			<h2>Ortopedia</h2>
			<hr/>
			<h3>Bloco: 2</h3>
			<ul>
				<li>Dra. Mariana Lopes</li>
				<li>Dr. Pedro Silva</li>
				<li>Dra. Inês Carvalho</li>
				<li>Dr. Tiago Rocha</li>
			</ul>
			<a class="btn" href="" >Agendar Consulta</a>
		</div>
		<div class="Pediatria">
			<h2>Pediatria</h2>
			<hr/>
			<h3>Bloco: 3</h3>
			<ul>
				<li>Dra. Beatriz Nunes</li>
				<li>Dr. Luís Teixeira</li>
				<li>Dra. Catarina Pinto</li>
				<li>Dr. André Monteiro</li>
			</ul>
			<a class="btn" href="" >Agendar Consulta</a>
		</div>
		<div class="Fisioterapia">
			<h2>Fisioterapia</h2>
			<hr/>
			<h3>Bloco: 4</h3>
			<ul>
				<li>Dra. Paula Azevedo</li>
				<li>Dr. Bruno Faria</li>
				<li>Dra. Daniela Correia</li>
				<li>Dr. José Mendes</li>
			</ul>
			<a class="btn" href="" >Agendar Consulta</a>
			<hr/>
		</div>
		<div class="container">
			<a class="btn" href="./homepage">Voltar á homepage</a>
		</div>
	</div>
</body>