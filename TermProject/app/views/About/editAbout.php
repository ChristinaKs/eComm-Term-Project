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
$about = $data[0];
?> 
    <h1>About Gemarius Edit Page</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="firstparagraph">First Paragraph: </label>
        <input name="firstparagraph" type="text" class="form-control" id="firstparagraph" value="<?php echo $about->firstparagraph?>">
    </div><div class="form-group">
        <label for="secondparagraph">Second Paragraph: </label>
        <input name="secondparagraph" type="text" class="form-control" id="secondparagraph" value="<?php echo $about->secondparagraph?>">
    </div><div class="form-group">
        <label for="thirdparagraph">Third Paragraph: </label>
        <input name="thirdparagraph" type="text" class="form-control" id="thirdparagraph" value="<?php echo $about->thirdparagraph?>">
    
    <br>
    <button type="submit" name='update' class="btn btn-primary">Update</button>
    <button id='cancel' name='cancel' class='btn btn-primary'> <a href='/TermProject/About/displayABout' >Cancel </a></button>
    </form>   
<?php require APPROOT . '/views/includes/footer.php'; ?>