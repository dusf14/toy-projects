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
</head>
<body>
	<h1>Eu sou a homepage</h1>
	<h2>Inquerito</h2>
	<label for="fname">First name:</label>
	<input type="text" id="fname"><br />
	<label for="lname">Last name:</label>
	<input type="text" id="lname:" name="lname"><br />
	<input type="submit" value="Submit"><br />
	<br />
	<button type="button">Envia-me!</button>
	<br />
	<button type="button">Loja de Bolachas!</button>
	<br />
	    	<a href="home" type="button" class="btn" id="btn">Voltar á Home Page</a>
</body>