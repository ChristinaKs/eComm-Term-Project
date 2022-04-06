<?php require APPROOT . '/views/includes/header.php'; 
?>
<h1>YOUR CART</h1>

<table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scrop="col" colspan="2" class="text-center"> Actions</th>
            </tr>
        <tbody>
            <?php 
                foreach($data as $product){
                    echo"<tr>";
                    echo '<td> Picture of product will be here</td>';
                    echo"<td>$product->ProductName</td>";
                    echo"<td>$product->ProductPrice</td>";
                    echo"<td>$product->Quantity</td>";
                    echo"<td>
                    <form method='POST'>
                    <button id='addToCart' name='addToCart' class='btn btn-success'><a href='userCart/removeItem/$product->UPC'> Remove from cart</a></button>
                    </form>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
    <button id='checkout' name='checkout' class='btn btn-dark'>Checkout</button>
    <button id='backHome' name='backHome' class='btn btn-success'><a href="Home/home">Continue Shopping</a></button>
<?php require APPROOT . '/views/includes/footer.php'; ?>