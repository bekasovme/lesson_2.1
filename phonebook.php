<?php
//$phonebook = file_get_contents(__DIR__ . '/phonebook.json');
$phonebook = file_get_contents(__DIR__ . '/phonebook.json');
$data = json_decode($phonebook, true);
//$data = [
//    ['firstName' => 'Иван', 'lastName' => 'Иванов', 'address' => 'г.Москва, ул. Алиева,2', 'phoneNumber' => '812 123-1234'],
//    ['firstName' => 'Михаил', 'lastName' => 'Михаилович', 'address' => 'г.Москва, ул. Кировоградская,16', 'phoneNumber' => '812 234-3456'],
//    ['firstName' => 'Ира', 'lastName' => 'Иванова', 'address' => 'г.Москва, ул. Алиева,56', 'phoneNumber' => '812 156-3278'],
//    ['firstName' => 'Илья', 'lastName' => 'Сергеевич', 'address' => 'г.Воронеж, ул. Южная,2', 'phoneNumber' => '812 278-7034']
//]
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Телефонная книга</title>
</head>
<body>
<table>
    <thead>
        <th>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Адрес</td>
            <td>Телефон</td>
        </th>
    </thead>
    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['firstName']; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>