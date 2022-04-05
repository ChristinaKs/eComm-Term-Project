<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/getProducts">Get Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/createProducts">Create Products</a>
      </li>
    </ul>
  </div>
</nav>

    <h1>Get Products View</h1>
    <table  class="table table-bordered">
        <tr>
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
                <div class="d-flex align-items-center"><img class="rounded-circle" src="'.URLROOT.'/public/img/'.$user->Picture.'" width="30"><span class="ml-2">'.$user->Name.'</span></div>
            </td>';
                echo"<td>$products->UPC</td>";
                echo"<td>$products->ProductName</td>";
                echo"<td>$products->ProductDescription</td>";
                echo"<td>$products->ProductPrice</td>";
                echo"<td>$products->ProductAmount</td>";
                echo"<td>
                <a href='/TermProject/Products/details/$products->UPC'> Details</a>
                </td>";
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