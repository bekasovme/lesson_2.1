<?php

$phonebook = file_get_contents(__DIR__ . '/phonebook.json');
$data = json_decode($phonebook, true);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Телефонная книга</title>
</head>
<body>
    <table>
    <?php foreach ($data as $item): ?>
        <th>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефон</td>
        </th>
        <tr>
            <td><?php echo $item["firstName"]; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
        <tr>
            <td><?php echo $item['firstName']; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
        <tr>
            <td><?php echo $item['firstName']; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
        <tr>
            <td><?php echo $item['firstName']; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>