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
            <tr>
                <?php 
                    foreach($data as $product=>$result){
                        echo "<td>".$result."</td>";
                    }
                ?>
            </tr>
        </tbody>
    </table>
    <button id='checkout' name='checkout' class='btn btn-dark'>Checkout</button>
    <button id='backHome' name='backHome' class='btn btn-success'><a href='/TermProject/Home'>Continue Shopping</a></button>
<?php require APPROOT . '/views/includes/footer.php'; ?>