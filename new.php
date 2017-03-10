<?php

  include 'header.php';

?>

<div class="row top-panel">
  <div class="col-md-2 col-xs-12">
    <a href="/index.php" class="btn btn-sm" id="more-top">Return Home</a>
  </div>
  <div class="col-md-8 col-xs-12">
    <h1 class="padding-below">Create New Contact</h1>
  </div>
  <div class="col-md-2 hidden-xs"></div>
</div>


<form method="POST" action="/create.php">

  <div class="wrapper">
    <div class="row">
      <div class="form-group" id="edit-name">
      <div class="col-md-2 col-xs-12 nopadding-left">
        <label for="title"><h4>Title</h4></label>
        <input class="form-control" type="text" name="title" id="title" value="" placeholder="Title" />
      </div>
      <div class="col-md-5 col-xs-12 nopadding-left">
        <label for="fname"><h4>First Name</h4></label>
        <input class="form-control" type="text" name="fname" id="fname" value="" placeholder="First Name"/>
      </div>
      <div class="col-md-5 col-xs-12 nopadding">
        <label for="lname"><h4>Last Name</h4></label>
        <input class="form-control" type="text" name="lname" id="lname" value=""  placeholder="Last Name"/>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="form-group" id="edit-address">
          <label for="address"><h4>Address</h4></label>
          <input class="form-control" name="address" id="address" value="" placeholder="Address"/>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-name">
      <div class="col-md-7 col-xs-12 nopadding-left">
        <label for="city"><h4>City</h4></label>
        <input class="form-control" type="text" name="city" id="city" value="" placeholder="City"/>
      </div>
      <div class="col-md-2 col-xs-12 nopadding-left">
        <label for="state"><h4>State</h4></label>
        <input class="form-control" type="text" name="state" id="state" value="" placeholder="State" />
      </div>
      <div class="col-md-3 col-xs-12 nopadding">
        <label for="zip"><h4>Zipcode</h4></label>
        <input class="form-control" type="text" name="zip" id="zip" value="" placeholder="Zipcode"/>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group" id="edit-phone">
        <label for="phone"><h4>Phone Number</h4></label>
        <input class="form-control" name="phone" id="phone" value="" placeholder="Phone #"/>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="notes"><h4>Notes</h4></label>
        <textarea class="form-control" name="notes" id="notes"></textarea>
      </div>
    </div>

    <button class="btn margin-top btn-primary">Create New Contact</button>
  </div>

<?php include 'footer.php'; ?>
