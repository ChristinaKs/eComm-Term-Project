<?php require APPROOT . '/views/includes/header.php'; 
?>
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
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="/TermProject/Clients/viewClients">View Clients</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</nav>';
    }
?>

    <form method="POST">
        <label>Search for a product:</label>
        <input type="text" id="searchBar" name="searchBar" placeholder="Search...">
        <button type="submit" id="searchButton" name="searchButton" class='btn btn-dark'> <a href="/TermProject/Home/searchProduct">Search </a> </button>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" id="random" name="random" class='btn btn-dark right'>
                
           <a href="/TermProject/Home/RandomProduct"> Pick Product For Me </a></button>
        </div>   
    </form>

    <table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scrop="col" colspan="2" class="text-center"> Actions</th>
            </tr>
        <tbody>
            <?php 
                foreach($data['product'] as $product){
                    echo"<tr>";
                    echo '<td> Picture of product will be here</td>';
                    echo"<td>$product->ProductName</td>";
                    echo"<td>$product->ProductPrice</td>";
                    echo"<td>
                    <button id='viewProduct' name='viewProduct' class='btn btn-primary'><a href='Home/viewProduct/$product->UPC'> View </a></button>
                    </td>";
                    echo"<td>
                    <form method='POST'>
                    <button id='addToCart' name='addToCart' class='btn btn-success'><a href='Home/AddCart/$product->UPC'>Add to cart </a></button>
                    </form>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
<?php require APPROOT . '/views/includes/footer.php'; ?>