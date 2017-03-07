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

<h1>Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="task_id" value="<?= $contact['id']; ?>" />

  <div class="wrapper">

    <div class="form-group">
      <label for="contact_name">First Name</label>
      <input class="form-control" type="text" name="name" id="firstname" value="<?= $contact['fname']; ?>" />
    </div>

    <div class="form-group">
      <label for="contact_name">Last Name</label>
      <input class="form-control" type="text" name="name" id="lastname" value="<?= $contact['lname']; ?>" />
    </div>

    <div class="form-group">
      <label for="contact_phone">Phone Number</label>
      <input class="form-control" name="phone" id="phone" value="<?= $contact['phone']; ?>" />
    </div>

    <button class="btn btn-primary">Save Contact</button>
  </div>
</form>

<?php include 'footer.php'; ?>
