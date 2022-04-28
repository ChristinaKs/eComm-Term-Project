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

    <h1>All Products</h1>
    <table  class="table table-bordered">
        <tr>
            <td>Image</td>
            <td>UPC</td>
            <td>Product Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Quantity Available</td>
            <td colspan="3" class="text-center"> Actions</td>
        </tr>
        <?php
            foreach($data["products"] as $products){
                echo"<tr>";
                echo '<td>
                <div class="d-flex align-items-center"><img class="img-thumbnail" src="'.URLROOT.'/public/img/'.$products->picture.'" width="100" height="100"></div>
                </td>';
                echo"<td>$products->UPC</td>";
                echo"<td>$products->ProductName</td>";
                echo"<td>$products->ProductDescription</td>";
                echo"<td>$products->ProductPrice</td>";
                echo"<td>$products->ProductAmount</td>";
                echo"<td>
                <a href='/TermProject/Products/update/$products->UPC'> Update</a>
                </td>";
                echo"<td>
                <a href='/TermProject/Products/delete/$products->UPC'> Delete</a>
                </td>";
                echo"</tr>";
            }
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>