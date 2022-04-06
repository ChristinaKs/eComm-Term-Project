<?php require APPROOT . '/views/includes/header.php';  ?>
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
    echo $about->firstparagraph;
    echo $about->secondparagraph;
    echo $about->thirdparagraph;
  ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>
