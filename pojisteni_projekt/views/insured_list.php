<h2>Seznam pojištěných</h2>
<table>
    <thead>
        <tr>
            <th>Jméno</th>
            <th>Příjmení</th>
            <th>Věk</th>
            <th>Telefon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($insuredList as $insured): ?>
            <tr>
                <td><?php echo htmlspecialchars($insured->getFirstName()); ?></td>
                <td><?php echo htmlspecialchars($insured->getLastName()); ?></td>
                <td><?php echo htmlspecialchars($insured->getAge()); ?></td>
                <td><?php echo htmlspecialchars($insured->getPhone()); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
