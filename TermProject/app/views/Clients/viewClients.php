<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/getProducts">Get Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/createProduct">Create Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Clients/viewClients">View Clients</a>
        </li>
    </ul>
  </div>
</nav>

    <h1>View Clients</h1>
    <table  class="table table-bordered">
        <tr>
            <td>Client Email</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Shipping Address</td>
            <td colspan="3" class="text-center"> Actions</td>
        </tr>
        <?php
        if ($data["clients"] != null) {
            foreach($data["clients"] as $clients){
                echo"<tr>";
                echo"<td>$clients->ClientEmail</td>";
                echo"<td>$clients->ClientFirstName</td>";
                echo"<td>$clients->ClientLastName</td>";
                echo"<td>$clients->ClientShippingAddress</td>";
                echo"<td>
                <a href='/TermProject/Clients/delete/$clients->ClientEmail'> Ban</a>
                </td>";
                echo"</tr>";
            }
        }else {
                echo"Apparently, there are no clients for the moment";
            }
        
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>