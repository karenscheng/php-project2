<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="row">
  <div class="col-md-2 hidden-xs"></div> <!-- helps with centering h1 -->
  <div class="col-md-8 col-xs-12">
    <h1>All Contacts <span class="text-muted hidden-xs">(<?= count($contacts); ?>)</span></h1>
  </div>
  <div class="col-md-2 col-xs-12 flex padding-below">
    <a href="/new.php" class="btn btn-success btn-add">+ Add Contact</a>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-hover">
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
            <td class="delete"><a href="/delete.php?id=<?= $contact['id']; ?>" onClick="return confirm('Are you sure you want to delete this contact?')"><img src="images/delete.png" /></a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
