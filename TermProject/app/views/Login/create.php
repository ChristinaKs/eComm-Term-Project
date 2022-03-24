<?php require APPROOT . '/views/includes/header.php';  ?>


  <form class="px-4 py-3" method="post" action="">
  <div class="form-group">
      <label for="ClientEmail">Email</label>
      <input type="text" class="form-control" id="ClientEmail" name="ClientEmail" placeholder="Please enter your email">
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
      <input type="text" class="form-control" id="ClientShippingAddress" name="ClientShippingAddress" placeholder="Please enter your shipping address">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Please enter your password">
    </div>
    <div class="form-group">
      <label for="verify_password">Re-enter your password</label>
      <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Please re-enter your password">
    </div>
    
    <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
    <p class="text-center">Already registered? <a href="/TermProject/Login/">Login</a> </p>

  </form>

<?php require APPROOT . '/views/includes/footer.php'; ?>