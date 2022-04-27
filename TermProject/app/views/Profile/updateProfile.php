<?php require APPROOT . '/views/includes/header.php'; 
?>

<form class="px-4 py-3" method="post" action="">

    <div class="form-group">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" id="firstNameInput" name="firstNameInput" value="<?php echo $data['first_name']?>">
    </div>

    <div class="form-group">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" id="lastNameInput" name="lastNameInput" value="<?php echo $data['last_name']?>">
    </div>

    <div class="form-group">
      <label for="shippingAddress">Shipping Address</label>
      <input type="text" class="form-control <?php echo (!empty($data['street_address_error'])) ? 'is-invalid' : ''; ?>" id="shippingAddressInput" name="shippingAddressInput" value="<?php echo $data['address']?>">
      <span class="invalid-feedback"><?php echo $data['street_address_error']; ?>
    </div>
    <div><button style="background-color:green" type='submit' name='updateClient' class='btn btn-primary'>Update </a> </button></div>

  </form>   

   
<?php require APPROOT . '/views/includes/footer.php'; ?>