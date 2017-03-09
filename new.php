<?php

  include 'header.php';

?>

<h1 class="padding-below">Create New Contact</h1>

<form method="POST" action="/create.php">

  <div class="wrapper">
    <div class="row">
      <div class="form-group" id="edit-name">
      <div class="col-md-2 nopadding-left">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="" placeholder="Title" />
      </div>
      <div class="col-md-5 nopadding-left">
        <label for="fname">First Name</label>
        <input class="form-control" type="text" name="fname" id="fname" value="" placeholder="First Name"/>
      </div>
      <div class="col-md-5 nopadding">
        <label for="lname">Last Name</label>
        <input class="form-control" type="text" name="lname" id="lname" value=""  placeholder="Last Name"/>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group" id="edit-address">
          <label for="address">Address</label>
          <input class="form-control" name="address" id="address" value="" placeholder="Address"/>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-name">
      <div class="col-md-7 nopadding-left">
        <label for="city">City</label>
        <input class="form-control" type="text" name="city" id="city" value="" placeholder="City"/>
      </div>
      <div class="col-md-2 nopadding-left">
        <label for="state">State</label>
        <input class="form-control" type="text" name="state" id="state" value="" placeholder="State" />
      </div>
      <div class="col-md-3 nopadding">
        <label for="zip">Zipcode</label>
        <input class="form-control" type="text" name="zip" id="zip" value="" placeholder="Zipcode"/>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-phone">
        <label for="phone">Phone Number</label>
        <input class="form-control" name="phone" id="phone" value="" placeholder="Phone #"/>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" name="notes" id="notes"></textarea>
      </div>
    </div>

    <button class="btn btn-primary">Create New Contact</button>
  </div>

<?php include 'footer.php'; ?>
