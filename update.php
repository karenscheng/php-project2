<?php

include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET fname = :fname, lname = :lname, title = :title, address = :address, city = :city, state = :state, zip = :zip, phone = :phone, notes = :notes WHERE id = :id');
//$stmt->bindParam

echo $_POST['id'];
echo $_POST['fname'];
echo $_POST['lname'];
echo $_POST['title'];
echo $_POST['address'];
echo $_POST['city'];
echo $_POST['state'];
echo $_POST['zip'];
echo $_POST['phone'];
echo $_POST['notes'];

$stmt->execute(array(
  ':id' => $_POST['id'],
  ':fname' => $_POST['fname'],
  ':lname' => $_POST['lname'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address']
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes']
));

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);
