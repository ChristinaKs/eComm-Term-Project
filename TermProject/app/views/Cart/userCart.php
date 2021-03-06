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
                        echo '<td>
                            <div class="d-flex align-items-center"><img class="img-thumbnail" src="'.URLROOT.'/public/img/'.$product->picture.'" width="100" height="100"></div>
                            </td>';
                        echo"<td>$product->ProductName</td>";
                        echo"<td>$product->ProductPrice</td>";
                        echo"<td>
                            <button id='addQuantity' name='addQuantity' class='btn btn-dark'><a href='/TermProject/userCart/addQuantity/$product->item_id'> + </a></button>
                            <label name='quantityValue'>".$product->Quantity."</label>
                            <button id='decreaseQuantity' name='decreaseQuantity' class='btn btn-dark'><a href='/TermProject/userCart/decreaseQuantity/$product->item_id'> - </a></button>
                            </td>";
                        echo"<td>
                        <button id='removeProduct' name='removeProduct' class='btn btn-danger'><a href='/TermProject/userCart/removeItem/$product->item_id'> Remove Item </a></button>
                        </td>";
                        echo"</tr>";
                    }
                ?>
        </tbody>
    </table>

    <button id='checkout' name='checkout' class='btn btn-dark'><a href="/TermProject/userCart/confirmOrder">Checkout</a></button>
    <button id='backHome' name='backHome' class='btn btn-success'><a href='/TermProject/Home'>Continue Shopping</a></button>
<?php require APPROOT . '/views/includes/footer.php'; ?>