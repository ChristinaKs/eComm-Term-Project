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
  <div>
  <?php
    if (isLoggedIn()) {
      echo"<button style='background-color:green' type='submit' id='SendMessage' name='SendMessage' class='btn btn-primary'> <a href='/TermProject/Requests/addRequest'>Send message </a></button>";
     echo "<div>";
      echo "<button id='viewResponses' style='background-color:green' name='edit' class='btn btn-secondary'> <a href='/TermProject/Responses/getResponses' >View Seller Responses </a></button>";
  }if (isAdminLoggedIn()) {
    echo "<button id='viewResponses' style='background-color:green' name='edit' class='btn btn-secondary'> <a href='/TermProject/Requests/getRequests' >View Customer Requests </a></button>";
}
?>
</div>

</form> 
<table  class="table" style="margin-left: auto; margin-right: auto; border-collapse: collapse;">
        <?php
        // echo (var_dump($data));
            foreach($data["contact"] as $contact){
                echo"<tr>";
                echo"<td>";
                if($contact->Twitter == ''){
                  echo "";
                } else{
                  echo "<a href='$contact->Twitter'
                    <img src='".URLROOT."'/img/twt.png.jpg'/>
                  </a></td>";
                }
                echo"<td>";
                if($contact->Instagram == ''){
                  echo "";
                } else{
                  echo "<a href='$contact->Instagram'>
                    <img src='".URLROOT."'/img/ig.jpg'/>
                  </a></td>";
                }
                echo"<td>";
                if($contact->Facebook == ''){
                  echo "";
                } else{
                  echo "<td><a href='$contact->Facebook'>
                    <img src='".URLROOT."'/img/fb.png'/>
                  </a></td>";
                }
                echo"<td>";
                echo"</tr>";
            }

            if (isAdminLoggedIn()) {
              echo "<button id='editContact' name='edit' class='btn btn-secondary'> <a href='/TermProject/Contact/editContact' >edit </a></button>";
            }
        ?>
    </table>

    <?php require APPROOT . '/views/includes/footer.php'; ?>
