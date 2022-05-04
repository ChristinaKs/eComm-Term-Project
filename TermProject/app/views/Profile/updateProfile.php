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
    
    <div><button style="background-color:green" type='submit' name='updateClient' class='btn btn-primary'>Update </a> </button></div>

  </form>   

   
<?php require APPROOT . '/views/includes/footer.php'; ?>
