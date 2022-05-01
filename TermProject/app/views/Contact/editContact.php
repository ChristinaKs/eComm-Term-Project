<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light" style="font-family: cursive; background-color: #078A60;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/getProducts">All Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/createProduct">Create a Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Clients/viewClients">My Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Orders/getOrders">All Orders</a>
      </li>
    </ul>
  </div>
</nav>

<?php
$contact = $data[0];
?> 
    <h1>Contact Gemarius Edit Page</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="Instagram">Instagram: </label>
        <input name="Instagram" type="text" class="form-control" id="Instagram" value="<?php echo $contact->Instagram?>">
    </div><div class="form-group">
        <label for="Twitter">Twitter: </label>
        <input name="Twitter" type="text" class="form-control" id="Twitter" value="<?php echo $contact->Twitter?>">
    </div><div class="form-group">
        <label for="Facebook">Facebook: </label>
        <input name="Facebook" type="text" class="form-control" id="Facebook" value="<?php echo $contact->Facebook?>">
    
    <br>
    <button type="submit" name='update' class="btn btn-primary">Update</button>
    <button id='cancel' name='cancel' class='btn btn-primary'> <a href='/TermProject/Contact/displayContact' >Cancel </a></button>
    </form>   
<?php require APPROOT . '/views/includes/footer.php'; ?>