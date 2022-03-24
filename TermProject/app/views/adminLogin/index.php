<?php require APPROOT . '/views/includes/header.php';  ?>



<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
        <label for="AdminEmail">Email:</label>
        <input type="text" class="form-control" id="AdminEmail" name="AdminEmail" placeholder="AdminEmail">
    </div>
    <div class="form-group">
        <label for="AdminPassword">Password</label>
        <input type="password" class="form-control" id="AdminPassword" name="AdminPassword" placeholder="Password">
    </div>
    <div> 
        <button type="submit" name="login" class="btn btn-primary">Sign in</button>
    </div>
    <?php

    if($data != []){
        echo '<div class="alert alert-danger" role="alert">'.
            $data['msg'].'
        </div>';
    }

?>

</form>



<?php require APPROOT . '/views/includes/footer.php'; ?>