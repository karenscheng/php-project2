<?php

include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET fname = :fname, lname = :lname, title = :title, address = :address, city = :city, state = :state, zip = :zip, phone = :phone, notes = :notes WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':fname' => $_POST['fnam'],
  ':lname' => $_POST['lname'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address']
  ':city' => $_POST['phone'],
  ':state' => $_POST['phone'],
  ':zip' => $_POST['phone'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes'],
));

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);