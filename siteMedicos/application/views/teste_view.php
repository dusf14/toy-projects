<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Médicos</title>
</head>
<body>

<h1>Medicos disponíveis</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
    </tr>

    <?php foreach ($medicos as $m): ?>
        <tr>
            <td><?= $m->medico_id ?></td>
            <td><?= $m->nome ?></td>
            <td><?= $m->categoria ?></td>
			<td><?= $m->bloco ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>
