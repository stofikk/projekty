<?php
require_once __DIR__ . '/../controllers/InsuredController.php';

$controller = new InsuredController();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    $controller->create();
}

$insuredList = $controller->index();

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidence pojištěných</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Domů</a></li>
            <li><a href="#add-insured">Přidat pojištěného</a></li>
            <li><a href="#insured-list">Seznam pojištěných</a></li>
        </ul>
    </nav>
</header>
<main id="app">
    <h1>Evidence pojištěných</h1>
    <section id="add-insured">
        <?php include __DIR__ . '/../views/create_insured.php'; ?>
    </section>
    <section id="insured-list">
        <?php include __DIR__ . '/../views/insured_list.php'; ?>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Kryštof Němeček Všechna práva vyhrazena.</p>
</footer>
</body>
</html>
