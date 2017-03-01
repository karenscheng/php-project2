<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
<table class="table table-hover">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone</th>
    <th>City</th>
    <th>State</th>
    <th>Notes</th>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
    <tr>
      <td><?= $contact['id']; ?></td>
      <td><?= $contact['fname']; ?></td>
      <td><?= $contact['lname']; ?></td>
      <td><?= $contact['phone']; ?></td>
      <td><?= $contact['city']; ?></td>
      <td><?= $contact['state']; ?></td>
      <td><?= $contact['notes']; ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
