<h2>Přidat pojištěného</h2>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="create">
    <label for="first_name">Jméno:</label>
    <input type="text" name="first_name" required>
    <label for="last_name">Příjmení:</label>
    <input type="text" name="last_name" required>
    <label for="age">Věk:</label>
    <input type="number" name="age" required>
    <label for="phone">Telefon:</label>
    <input type="text" name="phone" required>
    <input type="submit" value="Uložit">
</form>
