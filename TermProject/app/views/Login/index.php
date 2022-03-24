<?php require APPROOT . '/views/includes/header.php';  ?>



<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
        <label for="ClientEmail">Email</label>
        <input type="text" class="form-control" id="ClientEmail" name="ClientEmail" placeholder="ClientEmail">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div> 
        <button type="submit" name="login" class="btn btn-primary">Sign in</button>
        <p class="text-center">Not registered yet? <a href="/TermProject/Login/Create">Sign Up</a> </p>
        <p class="text-center">You are an Admin? <a href="/TermProject/adminLogin/index">Admin Login</a> </p>
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
