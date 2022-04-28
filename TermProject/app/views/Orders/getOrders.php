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

    <h1>Orders</h1>
    <table  class="table table-bordered">
        <tr>
            <td>Order ID</td>
            <td>Client Email</td>
            <td>Order Date</td>
            <td>Total Price</td>
            <td>Order Status</td>
            <td>View Details</td>
        </tr>
        <?php
            foreach($data["orders"] as $orders){
                echo"<tr>";
                echo"<td>$orders->OrderId</td>";
                echo"<td>$orders->ClientEmail</td>";
                echo"<td>$orders->OrderDate</td>";
                echo"<td>$orders->OrderTotalPrice</td>";
                echo"<td>
                <form action='/TermProject/Orders/updateOrderStatus/$orders->OrderId' method='post'> 
                <input type='checkbox' name='OrderStatusCB' onChange='this.form.submit()'";
                if($orders->OrderStatus == 'Shipped'){
                  echo "checked";
                }
                echo "> Shipped
                </form>
                </td>";
                echo"<td>
                <a href='/TermProject/Orders/getOrder/$orders->OrderId'>View Details</a>
                </td>";
                echo"</tr>";
            }
        ?>
    </table>
<?php require APPROOT . '/views/includes/footer.php'; ?>