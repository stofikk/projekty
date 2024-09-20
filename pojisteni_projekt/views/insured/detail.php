<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail pojištěného</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div id="app">
        <h1>Detail pojištěného</h1>
        <p>Jméno: <?php echo $insured['first_name']; ?></p>
        <p>Příjmení: <?php echo $insured['last_name']; ?></p>
        <p>Věk: <?php echo $insured['age']; ?></p>
        <p>Telefon: <?php echo $insured['phone']; ?></p>
        <h2>Pojištění</h2>
        <ul>
            <?php
            foreach ($insuranceList as $insurance) {
                echo "<li><a href='insurance_detail.php?id={$insurance['id']}'>{$insurance['type']}</a> 
                      <a href='insurance_edit.php?id={$insurance['id']}'>Edit</a> 
                      <a href='insurance_delete.php?id={$insurance['id']}'>Delete</a></li>";
            }
            ?>
        </ul>
        <a href="insurance_create.php?insured_id=<?php echo $insured['id']; ?>">Přidat pojištění</a>
    </div>
</body>
</html>
