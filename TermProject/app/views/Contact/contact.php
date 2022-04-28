<?php require APPROOT . '/views/includes/header.php';  ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

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
<h1>Contact Us</h1>
<table  class="table" style="margin-left: auto; margin-right: auto; border-collapse: collapse;">
        <?php
            foreach($data["contact"] as $contact){
                echo"<tr>";
                echo"<td>";
                if($contact->Twitter == ''){
                  echo "";
                } else{
                  echo "<a href='$contact->Twitter' class='fa fa-twitter'></a></td>";
                }
                echo"<td>";
                if($contact->Instagram == ''){
                  echo "";
                } else{
                echo "<a href='$contact->Instagram' class='fa fa-instagram'></a></td>";
                }
                echo"<td>";
                if($contact->Facebook == ''){
                  echo "";
                } else{
                  echo "<td><a href='$contact->Facebook' class='fa fa-facebook'></a></td>";
                }
                echo"<td>";
                echo"</tr>";
            }
        ?>
    </table>

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
        <button style="background-color:green" type="submit" name="SendMessage" class="btn btn-primary">Send message</button>
    </div>
</form>
    <?php require APPROOT . '/views/includes/footer.php'; ?>
