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
<style>
  table {
  border-spacing: 0 10px;
  font-family: 'Open Sans', sans-serif;
  font-weight: bold;
  }
  th {
      padding: 10px 20px;
      background: #56433D;
      color: #F9C941;
      border-right: 2px solid;
      font-size: 0.9em;
  }
  th:first-child {
      text-align: left;
  }
  th:last-child {
      border-right: none;
  }
  td {
      vertical-align: middle;
      padding: 10px;
      font-size: 14px;
      text-align: center;
      border-top: 2px solid #56433D;
      border-bottom: 2px solid #56433D;
      border-right: 2px solid #56433D;
  }
  td:first-child {
      border-left: 2px solid #56433D;
      
  }
  td:nth-child(2){
      text-align: left;
  }
</style>
</head>
<body>
<table>
  <thead>
    <tr>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Адрес</th>
      <th>Телефон</th>
    </tr>
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