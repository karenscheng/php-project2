<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * FROM contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong>. Your contact was updated.</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p><strong>Contact created!</strong> Your contact was successfully created.</p>
</div>
<?php endif; ?>

<h1 id="padding-below">Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="wrapper">
    <div class="row">
      <div class="form-group" id="edit-name">
      <div class="col-md-2 nopadding-left">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="<?= $contact['title']; ?>" />
      </div>
      <div class="col-md-5 nopadding-left">
        <label for="fname">First Name</label>
        <input class="form-control" type="text" name="fname" id="fname" value="<?= $contact['fname']; ?>" />
      </div>
      <div class="col-md-5 nopadding">
        <label for="lname">Last Name</label>
        <input class="form-control" type="text" name="lname" id="lname" value="<?= $contact['lname']; ?>" />
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group" id="edit-address">
          <label for="address">Address</label>
          <input class="form-control" name="address" id="address" value="<?= $contact['address']; ?>" />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-name">
      <div class="col-md-7 nopadding-left">
        <label for="city">City</label>
        <input class="form-control" type="text" name="city" id="city" value="<?= $contact['city']; ?>" />
      </div>
      <div class="col-md-2 nopadding-left">
        <label for="state">State</label>
        <input class="form-control" type="text" name="state" id="state" value="<?= $contact['state']; ?>" />
      </div>
      <div class="col-md-3 nopadding">
        <label for="zip">Zipcode</label>
        <input class="form-control" type="text" name="zip" id="zip" value="<?= $contact['zip']; ?>" />
      </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-phone">
        <label for="phone">Phone Number</label>
        <input class="form-control" name="phone" id="phone" value="<?= $contact['phone']; ?>" />
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" name="notes" id="notes"><?= $contact['notes']; ?></textarea>
      </div>
    </div>

    <button class="btn btn-primary">Save Contact</button>
  </div>
</form>

<?php include 'footer.php'; ?>
