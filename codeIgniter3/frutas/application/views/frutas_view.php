<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Frutas</title>
</head>
<body>

    <label for="frutas">Escolha uma fruta:</label>
    
    <select name="frutas" id="frutas">
        <option value="">-- Selecione uma fruta --</option>
        
        <?php foreach ($frutas as $fruta): ?>
            <option value="<?= htmlspecialchars($fruta->id) ?>">
                <?= htmlspecialchars($fruta->nome) ?>
            </option>
        <?php endforeach; ?>
        
    </select>

</body>
</html>