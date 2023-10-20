<?php

include('connection.php');
include('doc_header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
</head>
<body>

<div class="container">
<h2 style="color:#06A3DA; margin-top: 30px; text-align: center;">Doctors Signup</h2>
<form class="row g-3" method="post" style="margin-bottom: 10%;">
  <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="validationDefault01" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault02" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="validationDefault02" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefaultUsername" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="validationDefault02" required>

  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault04" class="form-label">Specialization</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>Neuro Sergon</option>
      <option>Dentist</option>
      <option>Dermatologist</option>
      <option>General practitioner</option>
      <option>Radiologist</option>
      <option>Plastic Surgeon</option>
      <option>Psychiatrist</option>
      <option>Oncologist</option>
      <option>Cardiologist</option>
      <option>Cardiologist</option>
    </select>
  </div>
  <!-- <div class="col-md-6">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div> -->
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>
<?php 
include('footer.php')
?>
</body>
</html>


