<?php

  include 'database.php';
  // deletes element from db

  $stmt = $db->prepare('DELETE from contacts WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));

  header('Location: http://localhost:8080/index.php?deleted=true');

?>
