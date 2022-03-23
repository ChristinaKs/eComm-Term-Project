<?php require APPROOT . '/views/includes/header.php';  ?>


  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="ClientFirstName">First Name</label>
      <input type="text" class="form-control" id="ClientFirstName" name="ClientFirstName" placeholder="ClientFirstName">
    </div>
    <div class="form-group">
      <label for="ClientLastName">Last Name</label>
      <input type="text" class="form-control" id="ClientLastName" name="ClientLastName" placeholder="ClientLastName">
    </div>
    <div class="form-group">
      <label for="ClientShippingAddress">Shipping Address</label>
      <input type="text" class="form-control" id="ClientShippingAddress" name="ClientShippingAddress" placeholder="ClientShippingAddress">
    </div>
    <div class="form-group">
      <label for="ClientCardNumber">Credit Card Number****</label>
      <input type="text" class="form-control" id="ClientCardNumber" name="ClientCardNumber" placeholder="ClientCardNumber">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="verify_password">Re-enter the password</label>
      <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Re-enter the password">
    </div>
    
    <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
    <p class="text-center">Already registered? <a href="/TermProject/Login/">Login</a> </p>

  </form>

<?php require APPROOT . '/views/includes/footer.php'; ?>