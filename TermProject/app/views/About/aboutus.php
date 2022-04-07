<?php require APPROOT . '/views/includes/header.php';  ?>
<?php
    if (isAdminLoggedIn()) {
        echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo '<ul class="navbar-nav mr-auto">';
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="/TermProject/Products/getProducts">Get Products</a>';
        echo '</li>';
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="/TermProject/Products/createProduct">Create Product</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</nav>';
    }
?>
<form>
  <div class="form-group">
  <?php
  if (isAdminLoggedIn()) {
    echo "<button id='editAbout' name='edit' class='btn btn-dark'>edit</button>";
  }?>
  </div>
</form>
<div class="about-section">
  <h1>About Us Page</h1>
  <?php
  foreach($data["about"] as $about){
    echo "&emsp;&emsp;";
    echo $about->firstparagraph;
    echo "<br><br>&emsp;&emsp;";
    echo $about->secondparagraph;
    echo "<br><br>&emsp;&emsp;";
    echo $about->thirdparagraph;
  } 
  ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>
