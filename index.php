<?php

  include 'header.php';

  $sortlname = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;
  $sortfname = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;

  if ($sortlname !== null) {
    $contacts = $db->query('SELECT * FROM contacts ORDER BY lname ' . $sortlname)->fetchAll(PDO::FETCH_ASSOC);
  } else if ($sortfname !== null) {
    $contacts = $db->query('SELECT * FROM contacts ORDER BY fname ' . $sortfname)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
  }
?>

<div class="row top-panel">
  <div class="col-md-2 hidden-xs"></div> <!-- helps with centering h1 -->
  <div class="col-md-8 col-xs-12">
    <h1>Contact Manager</h1>
  </div>
  <div class="col-md-2 col-xs-12 flex padding-below">
    <a href="/new.php" class="btn btn-primary btn-add">+ Add Contact</a>
  </div>
</div>

<div class="row padding-phone">
  <div class="col-md-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <th><h2>ID</h2></th>
          <th><a href="/index.php?sort=<?= ($sortfname === null || $sortfname === 'desc') ? 'asc' : 'desc'; ?>"><h2>First Name</h2></th>
          <th><a href="/index.php?sort=<?= ($sortlname === null || $sortlname === 'desc') ? 'asc' : 'desc'; ?>"><h2>Last Name</h2></a></th>
          <th><h2>City</h2></th>
          <th><h2>State</h2></th>
          <th><h2>Phone</h2></th>
          <th> </th>
          <th> </th>
        </thead>
        <tbody>
          <?php foreach($contacts as $contact) : ?>
          <tr>
            <td><a href="/edit.php?id=<?= $contact['id']; ?>"><h4><?= $contact['id']; ?></h4></a></td>
            <td><a href="/edit.php?id=<?= $contact['id']; ?>"><h4><?= $contact['fname']; ?></h4></a></td>
            <td><a href="/edit.php?id=<?= $contact['id']; ?>"><h4><?= $contact['lname']; ?></h4></a></td>
            <td><a href="/edit.php?id=<?= $contact['id']; ?>"><h4><?= $contact['city']; ?></h4></a></td>
            <td><a href="/edit.php?id=<?= $contact['id']; ?>"><h4><?= $contact['state']; ?></h4></a></td>
            <td><a href="/edit.php?id=<?= $contact['id']; ?>"><h4><?= $contact['phone']; ?></h4></a></td>
            <td class="edit"><a href="/edit.php?id=<?= $contact['id']; ?>"><img src="images/edit.png" /></a></td>
            <td class="delete"><a href="/delete.php?id=<?= $contact['id']; ?>" onClick="return confirm('Are you sure you want to delete this contact?')"><img src="images/delete.png" /></a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php if (array_key_exists('updated', $_GET)) : ?>
  <div class="row">
    <div class="col-md-12 col-xs-12 center">
      <div class="btn btn-lg">
        <!-- reads POST from update, alerts success if contact updates -->
        <p><strong>Update successful!</strong> Your contact was updated.</p>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
  <div class="row">
    <div class="col-md-12 col-xs-12 center">
      <div class="btn btn-lg">
        <!-- reads POST from create, alerts success if contact is created -->
        <p><strong>Contact created!</strong> Your contact was successfully created.</p>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php include 'footer.php'; ?>
