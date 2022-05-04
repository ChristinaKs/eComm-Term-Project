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

<h1>Order Details</h1>
  <table  class="table table-bordered">
    <tr>
      <td>Order ID</td>
      <td>Product UPC</td>
      <td>Product Name</td>
      <td>Quantity</td>
    </tr>
    <?php
      foreach($data["order_detail"] as $order_detail){
        echo"<tr>";
        echo"<td>$data->orderId</td>";
        echo"<td>$data->UPC</td>";
        echo"<td>$data->ProductName</td>";
        echo"<td>$data->Quantity</td>";
        echo"</td>";
        echo"</tr>";

        // echo"<tr>";
        // echo"<td>$order_detail->orderId</td>";
        // echo"<td>$order_detail->UPC</td>";
        // echo"<td>$order_detail->ProductName</td>";
        // echo"<td>$order_detail->Quantity</td>";
        // echo"</td>";
        // echo"</tr>";
      }
    ?>
  </table>

  <form>
    <button id='Back' name='Back' class='btn btn-primary'> <a href='/TermProject/Orders/getOrders' >Back to Orders </a></button>
  </form>
<?php require APPROOT . '/views/includes/footer.php'; ?>