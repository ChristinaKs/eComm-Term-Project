<?php require APPROOT . '/views/includes/header.php'; 
?>

<form class="px-4 py-3" method="post" action="">

    <div class="form-group">
      <label for="firstName"><?=_("First Name")?></label>
      <label for="text" class="form-control" id="firstName" name="firstName"><?php echo $data['first_name']?></label>
    </div>

    <div class="form-group">
      <label for="lastName"><?=_("Last Name")?></label>
      <label for="text" class="form-control" id="lastName" name="lastName"><?php echo $data['last_name']?></label>
    </div>
    <div class="form-group">
      <label for="email"><?=_("Email")?></label>
      <label for="text" class="form-control" id="email" name="email"><?php echo $data['email']?></label>
    </div>
    <div><button style="background-color:green" type='submit' name='updateClient' class='btn btn-primary'> <a href='/TermProject/Profile/update'> <?=_("Update Info")?> </a> </button>
    <button style="background-color:green" type="submit" name='changePassword' class="btn btn-primary"><a href='/TermProject/Profile/updatePassword'><?=_("Change password")?></button>
    <button style="background-color:green" type="submit" name='deleteProfile' class="btn btn-primary"><a href='/TermProject/Profile/delete'><?=_("Delete account")?></button>
    </div>
    <a class="nav-link" style="color:green" href="/TermProject/Cards/viewCards"><i class="fa-solid fa-profile"></i> View my cards </a></li>
    <a class="nav-link" style="color:green" href="/TermProject/Addresses/viewAddresses"><i class="fa-solid fa-profile"></i> View my addresses </a></li>
  </form>   
  <br>
  <h2>Order History</h2>
  <br>
  <?php foreach($data2 as $order) {?>
      <table class="table">
        <thead class="table-light">
        </thead>
        <h4>Date of order: <?= $order->OrderDate?></h4>
        <h5>Status: <?= $order->OrderStatus?> </h5>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit Price</th>
            </tr>
        <tbody>
            <?php 
                $i = 0;
                foreach($data3 as $orderDetail){
                    echo"<tr>";
                    echo"<td>".$orderDetail[$i]->ProductName."</td>";
                    echo"<td>".$orderDetail[$i]->Quantity."</td>";
                    echo"<td>".$orderDetail[$i]->unitPrice."</td>";
                    echo"</tr>";
                    $i++;
                }
        
            ?>
        </tbody>
    </table>
  <?php }?>
<?php require APPROOT . '/views/includes/footer.php'; ?>