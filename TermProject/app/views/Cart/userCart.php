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
                // echo "<pre>";
                // var_dump($data);
                // echo "</pre>";
               
                // var_dump($data["ProductName"]);
                foreach($data as $product){
                    echo "<pre>";
                    var_dump($product);
                    echo "</pre>";
                     echo"<tr>";
                     echo '<td> Picture of product will be here</td>';
                     echo"<td>".$product."</td>";
                     echo"<td>".$product."</td>";
                     echo"<td>".$product."</td>";
                     echo"<td>
                     <form method='POST'>
                     <button id='addToCart' name='addToCart' class='btn btn-danger'><a href='userCart/removeItem/$product->UPC'> Remove from cart</a></button>
                     </form>
                     </td>";
                     echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
    <button id='checkout' name='checkout' class='btn btn-dark'>Checkout</button>
    <button id='backHome' name='backHome' class='btn btn-success'><a href='TermProject/Home'>Continue Shopping</a></button>
<?php require APPROOT . '/views/includes/footer.php'; ?>