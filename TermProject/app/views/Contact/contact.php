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
  if (!isLoggedIn()) {
    echo '<label for="exampleFormControlInput1">Email address</label>
     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">';
  }?>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select a message type</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option style="color:	rgb(220,220,220)">--Select type--</option>
      <option>Payment</option>
      <option>Delivery</option>
      <option>Items in the store</option>
      <option>Account</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Input your message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div>
        <button type="submit" name="SendMessage" class="btn btn-primary">Send message</button>
    </div>
</form>
    <?php require APPROOT . '/views/includes/footer.php'; ?>
