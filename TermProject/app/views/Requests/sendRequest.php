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
<h1>Send a request</h1>

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
    <select class="form-control" id="exampleFormControlSelect1" name="RequestTitle">
      <option style="color:	rgb(220,220,220)">--Select type--</option>
      <option>Payment</option>
      <option>Delivery</option>
      <option>Items in the store</option>
      <option>Account</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="RequestText" >Input your message</label>
    <textarea class="form-control" id="RequestText" name="RequestText" rows="3"></textarea>
  </div>

  <div>
        <button style="background-color:green" type="submit" id="SendMsg" name="SendMsg" class="btn btn-primary"> Send </button>
  </div>


  <div>
  <?php
    if (isLoggedIn()) {
      echo "<button id='viewResponses' style='background-color:green' name='edit' class='btn btn-secondary'> <a href='/TermProject/Responses/getResponses' >View Seller Responses </a></button>";
  }if (isAdminLoggedIn()) {
    echo "<button id='viewResponses' style='background-color:green' name='edit' class='btn btn-secondary'> <a href='/TermProject/Requests/getRequests' >View Customer Requests </a></button>";
}
?>
</div>
    <?php require APPROOT . '/views/includes/footer.php'; ?>