<?php require APPROOT . '/views/includes/header.php';  ?>
<?php
    if (isAdminLoggedIn()) {
      echo '<nav class="navbar navbar-expand-lg navbar-light" style="font-family: cursive; background-color: #078A60;">
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
    </nav>';
    }
?>
<!-- <form>
  <div class="form-group">
  
  </div>
</form> -->
<div class="about-section" style="background-color: white;">
  <h1>About Gemarius</h1>
  <?php
  foreach($data["about"] as $about){
    echo "&emsp;&emsp;";
    echo $about->firstparagraph;
    echo "<br><br>&emsp;&emsp;";
    echo $about->secondparagraph;
    echo "<br><br>&emsp;&emsp;";
    echo $about->thirdparagraph;
  } 
  echo "<br><br>";
  if (isAdminLoggedIn()) {
    echo "<button id='editAbout' name='edit' class='btn btn-secondary'> <a href='/TermProject/About/editAbout' >edit </a></button>";
  }?>
  
<?php require APPROOT . '/views/includes/footer.php'; ?>
