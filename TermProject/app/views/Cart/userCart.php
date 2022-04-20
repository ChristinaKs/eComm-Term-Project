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
                        echo '<td> Picture will be here </td>';
                        echo"<td>$product->ProductName</td>";
                        echo"<td>$product->ProductPrice</td>";
                        echo"<td><input name='quantity' onchange='/TermProject/userCart/changeQuantity/$product->item_id' class='text-center' type='number' value=".$product->Quantity." min=1></td>";
                        echo"<td>
                        <button id='removeProduct' name='removeProduct' class='btn btn-danger'><a href='/TermProject/userCart/removeItem/$product->item_id'> Remove Item </a></button>
                        </td>";
                        echo"</tr>";
                    }
                ?>
        </tbody>
    </table>

    <button id='checkout' name='checkout' class='btn btn-dark'>Checkout</button>
    <button id='backHome' name='backHome' class='btn btn-success'><a href='/TermProject/Home'>Continue Shopping</a></button>
<?php require APPROOT . '/views/includes/footer.php'; ?>