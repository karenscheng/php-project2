<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * FROM contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="row top-panel">
  <div class="col-md-4 col-xs-12">
    <a href="/index.php" class="btn btn-sm" id="more-top">Return Home</a>
  </div>
  <div class="col-md-4 col-s-10 col-xs-12 flex">
    <h1>Edit Contact</h1>
  </div>
  <div class="col-md-4 col-s-2 col-xs-12 flex left">
    <a href="/delete.php?id=<?= $contact['id']; ?>" onClick="return confirm('Are you sure you want to delete this contact?')" class="btn btn-sm btn-delete margin-bottom-phone">Delete</a>
  </div>
</div>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="wrapper">
    <div class="row padding-top">
      <div class="form-group" id="edit-name">
      <div class="col-md-2 col-xs-12 nopadding-left">
        <label for="title"><h4>Title</h4></label>
        <input class="form-control" type="text" name="title" id="title" value="<?= $contact['title']; ?>" />
      </div>
      <div class="col-md-5 col-xs-12 nopadding-left">
        <label for="fname"><h4>First Name</h4></label>
        <input class="form-control" type="text" name="fname" id="fname" value="<?= $contact['fname']; ?>" />
      </div>
      <div class="col-md-5 col-xs-12 nopadding">
        <label for="lname"><h4>Last Name</h4></label>
        <input class="form-control" type="text" name="lname" id="lname" value="<?= $contact['lname']; ?>" />
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="form-group" id="edit-address">
          <label for="address"><h4>Address</h4></label>
          <input class="form-control" name="address" id="address" value="<?= $contact['address']; ?>" />
        </div>
      </div>
    </div>

    <div class="row padding-top">
      <div class="form-group" id="edit-name">
      <div class="col-md-7 col-xs-12 nopadding-left">
        <label for="city"><h4>City</h4></label>
        <input class="form-control" type="text" name="city" id="city" value="<?= $contact['city']; ?>" />
      </div>
      <div class="col-md-2 col-xs-12 nopadding-left">
        <label for="state"><h4>State</h4></label>
        <input class="form-control" type="text" name="state" id="state" value="<?= $contact['state']; ?>" />
      </div>
      <div class="col-md-3 col-xs-12 nopadding">
        <label for="zip"><h4>Zipcode</h4></label>
        <input class="form-control" type="text" name="zip" id="zip" value="<?= $contact['zip']; ?>" />
      </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-phone">
        <label for="phone"><h4>Phone Number</h4></label>
        <input class="form-control" name="phone" id="phone" value="<?= $contact['phone']; ?>" />
      </div>
    </div>

    <div class="row padding-top">
      <div class="form-group">
        <label for="notes"><h4>Notes</h4></label>
        <textarea class="form-control" name="notes" id="notes"><?= $contact['notes']; ?></textarea>
      </div>
    </div>

    <button class="btn btn-primary margin-top">Save Contact</button>
  </div>
</form>

<?php include 'footer.php'; ?>
