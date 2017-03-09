<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="row">
  <div class="col-md-2"></div> <!-- helps with centering h1 -->
  <div class="col-md-8">
    <h1>All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
  </div>
  <div class="col-md-2">
    <a href="/new.php" class="btn btn-success btn-add">+ Add Contact</a>
  </div>
</div>

<table class="table table-responsive table-hover">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City</th>
    <th>State</th>
    <th>Phone</th>
    <th> </th>
    <th> </th>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
    <tr>
      <td><?= $contact['id']; ?></td>
      <td><?= $contact['fname']; ?></td>
      <td><?= $contact['lname']; ?></td>
      <td><?= $contact['city']; ?></td>
      <td><?= $contact['state']; ?></td>
      <td><?= $contact['phone']; ?></td>
      <td class="edit"><a href="/edit.php?id=<?= $contact['id']; ?>"><img src="images/edit.png" /></a></td>
      <td class="delete"><a href="/delete.php?id=<?= $contact['id']; ?>"><img src="images/delete.png" /></a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
