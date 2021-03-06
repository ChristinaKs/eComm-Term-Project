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

    <h1>Create a Product</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="ProductName">Product Name</label>
        <input name="ProductName" type="text" class="form-control" id="ProductName" placeholder="Name of the product">
    </div><div class="form-group">
        <label for="ProductDescription">Product Description</label>
        <input name="ProductDescription" type="text" class="form-control" id="ProductDescription" placeholder="Description of the product">
    </div>
    <div class="form-group">
        <label for="ProductPrice">Product Price</label>
        <input name="ProductPrice" type="text" class="form-control" id="ProductPrice" placeholder="Price of the product">
    </div>
    <div class="form-group">
        <label for="ProductAmount">Quantity Available</label>
        <input name="ProductAmount" type="text" class="form-control" id="ProductAmount" placeholder="Quantity available">
    </div>
    <div class="form-group">
        <label for="ProductPicture">Product picture</label>
        <input type='file' name='picture' class='form-control' />
    </div>

    <button type="submit" name='register' class="btn btn-primary">Register</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>