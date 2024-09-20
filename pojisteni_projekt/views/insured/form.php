<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulář pojištěného</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div id="app">
        <h1><?php echo $action == 'create' ? 'Přidat pojištěného' : 'Upravit pojištěného'; ?></h1>
        <form action="<?php echo $action_url; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($insured['id']) ? $insured['id'] : ''; ?>">
            <label for="first_name">Jméno:</label>
            <input type="text" name="first_name" value="<?php echo isset($insured['first_name']) ? $insured['first_name'] : ''; ?>" required>
            <label for="last_name">Příjmení:</label>
            <input type="text" name="last_name" value="<?php echo isset($insured['last_name']) ? $insured['last_name'] : ''; ?>" required>
            <label for="age">Věk:</label>
            <input type="number" name="age" value="<?php echo isset($insured['age']) ? $insured['age'] : ''; ?>" required>
            <label for="phone">Telefon:</label>
            <input type="text" name="phone" value="<?php echo isset($insured['phone']) ? $insured['phone'] : ''; ?>" required>
            <input type="submit" value="Uložit">
        </form>
    </div>
</body>
</html>
