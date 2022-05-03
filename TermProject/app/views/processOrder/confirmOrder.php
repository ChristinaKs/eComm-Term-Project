<?php require APPROOT . '/views/includes/header.php'; 
?>
<h1>CONFIRM YOUR ORDER</h1>

<table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
        <tbody>
                <?php 
                $totalPrice = 0;
                    foreach($data as $product){
                        $totalPrice += $product->ProductPrice*$product->Quantity;
                        echo"<tr>";
                        echo '<td>
                            <div class="d-flex align-items-center"><img class="img-thumbnail" src="'.URLROOT.'/public/img/'.$product->picture.'" width="100" height="100"></div>
                            </td>';
                        echo"<td>$product->ProductName</td>";
                        echo"<td>$product->ProductPrice</td>";
                        echo"<td><label name='quantityValue'>".$product->Quantity."</label></td>";
                        echo"<td><label name='quantityValue'>".$totalforProduct = $product->ProductPrice*$product->Quantity."</label></td>";
                        echo"</tr>";
                    }
                ?>
        </tbody>
    </table>
    <br>
    <div class="row">
        <div class="col-2">Total Price:</div>
        <div class="col col-lg-"><?=$totalPrice?></div>
    </div>
    <br>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        I want to track my shipping
        </label>
    </div>
    <br>

    <?php 
        echo "<label>Choose your card</label>";
        echo "<select>";
        foreach($data2 as $card){
            echo "<option value='$card->CardId'>".$card->CardNumber."</option>";
        }
        echo "</select>";
    ?>
    <br>
    <?php 
        echo "<label>Choose your address</label>";
        echo "<select>";
        foreach($data3 as $address){
            echo "<option value='$address->AddressId'>".$address->Address."</option>";
        }
        echo "</select>";
    ?>
    <br>
    <button id='checkout' name='checkout' class='btn btn-dark'><?php echo "<a href='/TermProject/PaymentProcess/confirmOrder/$totalPrice'>Confirm my Order </a>"?></button>
    <button id='backHome' name='backHome' class='btn btn-success'><a href='/TermProject/Home'>Continue Shopping</a></button>
<?php require APPROOT . '/views/includes/footer.php'; ?>