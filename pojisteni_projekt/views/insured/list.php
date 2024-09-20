<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam pojištěných</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div id="app">
        <h1>Seznam pojištěných</h1>
        <a href="insured_create.php">Přidat pojištěného</a>
        <ul>
            <?php
            while ($row = $insuredList->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<li><a href='insured_detail.php?id={$id}'>{$first_name} {$last_name}</a> 
                      <a href='insured_edit.php?id={$id}'>Edit</a> 
                      <a href='insured_delete.php?id={$id}'>Delete</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
