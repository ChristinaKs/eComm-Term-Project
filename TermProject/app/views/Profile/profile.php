<?php require APPROOT . '/views/includes/header.php'; 
?>

<form class="px-4 py-3" method="post" action="">

    <div class="form-group">
      <label for="firstName">First Name</label>
      <label for="text" class="form-control" id="firstName" name="firstName"><?php echo $data['first_name']?></label>
    </div>

    <div class="form-group">
      <label for="lastName">Last Name</label>
      <label for="text" class="form-control" id="lastName" name="lastName"><?php echo $data['last_name']?></label>
    </div>

    <div class="form-group">
      <label for="shippingAddress">Shipping Address</label>
      <label for="text" class="form-control" id="shippingAddress" name="shippingAddress"><?php echo $data['address']?></label>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <label for="text" class="form-control" id="email" name="email"><?php echo $data['email']?></label>
    </div>
    <div><button type='submit' name='updateClient' class='btn btn-primary'> <a href='/TermProject/Profile/update'> Update Info </a> </button></div>

    <br><div><button type="submit" name='changePassword' class="btn btn-primary"><a href='/TermProject/Profile/updatePassword'>Change password</button></div>
    <br><div><button type="submit" name='deleteProfile' class="btn btn-primary"><a href='/TermProject/Profile/delete'>Delete account</button></div>

  </form>   

   
<?php require APPROOT . '/views/includes/footer.php'; ?>