<?php require APPROOT . '/views/includes/header.php'; 
?>
    <form method="POST">
        <label>Search for a product:</label>
        <input type="text" id="searchBar" name="searchBar" placeholder="Search...">
        <button type="submit" id="searchButton" name="searchButton" class='btn btn-dark'>Search</button>
    </form>
    <table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Price</th>
                <th scrop="col" colspan="2" class="text-center"> Actions</th>
            </tr>
        <tbody>
            <?php 
                foreach($data['product'] as $product){
                    echo"<tr>";
                    echo '<td> Picture of product will be here</td>';
                    echo"<td>$product->ProductName</td>";
                    echo"<td>$product->ProductDescription</td>";
                    echo"<td>$product->ProductPrice</td>";
                    echo"<td>
                    <button id='viewProduct' name='viewProoduct' class='btn btn-primary'><a href='Products/viewProduct/$product->UPC'></a> View</button>
                    </td>";
                    echo"<td>
                    <button id='addToCart' name='addToCart' class='btn btn-success'><a href='/TermProject/Cart/userCart'></a> Add to cart</button>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
    <?php
        /*if($data != []){
            echo '<div class="alert alert-success" role="alert">'.
             $data['msg'].'
          </div>';
        }*/
    ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>