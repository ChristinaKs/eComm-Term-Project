<?php require APPROOT . '/views/includes/header.php';  ?>
<form>
  <div class="form-group">
  <?php
  if (!isAdminLoggedIn()) {
    //<button id='editAbout' name='edit' class='btn btn-dark'>edit</button>
  }?>
  </div>
</form>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ex sed dolor sodales, at lacinia velit 
      pretium. Aliquam vel turpis eu lacus euismod vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec ullamcorper blandit 
      orci nec dictum. Praesent ac dapibus risus, ut molestie est. Fusce neque dui, placerat quis maximus ut, fringilla 
      eget metus. Sed posuere urna malesuada sapien lacinia, vitae laoreet turpis dignissim. Cras id velit leo. Maecenas 
      fermentum dapibus purus vitae ornare. Fusce egestas lorem sit amet leo sodales tempor. Phasellus interdum sapien vel 
      arcu blandit, non luctus ante interdum. Nulla lorem urna, venenatis et hendrerit sed, facilisis at dolor.</p>
  <p>Phasellus mi arcu, ornare in commodo at, finibus sed felis. Mauris mattis orci mi, eu porta sem faucibus at. Vestibulum 
      porttitor ut lacus id pellentesque. Vivamus bibendum bibendum nisi vitae finibus. Suspendisse consequat turpis eleifend 
      est tincidunt, eleifend ornare libero interdum. Nam sodales odio urna, eu ultrices elit mollis laoreet. Nullam eleifend 
      nunc tincidunt purus lobortis, sit amet dignissim mauris ornare. Ut semper feugiat tortor, et scelerisque ligula 
      efficitur a. Pellentesque dolor erat, eleifend ut turpis sed, varius fringilla nunc.</p>
</div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>
