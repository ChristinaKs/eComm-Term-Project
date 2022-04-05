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
                foreach($data['product'] as $product){
                    echo"<tr>";
                    echo '<td> Picture of product will be here</td>';
                    echo"<td>$product->ProductName</td>";
                    echo"<td>$product->ProductPrice</td>";
                    echo"<td>Quantity will be here and can be changed</td>";
                    echo"<td>
                    <form method='POST'>
                    <button id='addToCart' name='addToCart' class='btn btn-success'>Remove from cart</button>
                    </form>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
        <button id='checkout' name='checkout' class='btn btn-dark'>Checkout</button>
        <button id='backHome' name='backHome' class='btn btn-success'><a href="Home/home">Continue Shopping</a></button>
    </table>
<?php require APPROOT . '/views/includes/footer.php'; ?>