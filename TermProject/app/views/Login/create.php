<?php require APPROOT . '/views/includes/header.php';  ?>


  <form class="px-4 py-3" method="post" action="">
  <div class="form-group">
      <label for="ClientEmail">Email</label>
      <input type="text" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" id="ClientEmail" name="ClientEmail" placeholder="Please enter your email">
      <span class="invalid-feedback"><?php echo $data['email_error']; ?> </span>
    </div>
    <div class="form-group">
      <label for="ClientFirstName">First Name</label>
      <input type="text" class="form-control" id="ClientFirstName" name="ClientFirstName" placeholder="Please enter your first name">
    </div>
    <div class="form-group">
      <label for="ClientLastName">Last Name</label>
      <input type="text" class="form-control" id="ClientLastName" name="ClientLastName" placeholder="Please enter your last name">
    </div>
    <div class="form-group">
      <label for="ClientShippingAddress">Shipping Address</label>
      <input type="text" class="form-control <?php echo (!empty($data['street_address_error'])) ? 'is-invalid' : ''; ?>" id="ClientShippingAddress" name="ClientShippingAddress" placeholder="E.g.: 123 4th Street, Toronto, Ontario, M1A 1A1">
      <span class="invalid-feedback"><?php echo $data['street_address_error']; ?> </span>
    </div>
    <div class="form-group">
      <label for="ClientCardInformation">Credit card information</label>
      <input type="text" class="form-control" id="CardNumber" name="CardNumber" placeholder="Card number (e.g. 0000000000000000)"><br>
      <input type="text" class="form-control" id="CardName" name="CardName" placeholder="Name of the cardholder on the card">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control <?php echo (!empty($data['password_len_error'])) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Please enter your password">
      <span class="invalid-feedback"><?php echo $data['password_len_error']; ?> </span>
    </div>
    <div class="form-group">
      <label for="verify_password">Re-enter your password</label>
      <input type="password" class="form-control <?php echo (!empty($data['password_match_error'])) ? 'is-invalid' : ''; ?>" id="verify_password" name="verify_password" placeholder="Please re-enter your password">
      <span class="invalid-feedback"><?php echo $data['password_match_error']; ?> </span>
    </div>
    
    <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
    <p class="text-center">Already registered? <a href="/TermProject/Login/">Login</a> </p>

    <?php
      if(!empty($data['msg'])){
          echo '<div class="alert alert-danger" role="alert">'.
              $data['msg'].'
          </div>';
      }
?>

  </form>

<?php require APPROOT . '/views/includes/footer.php'; ?>