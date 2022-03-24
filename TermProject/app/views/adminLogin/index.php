<?php require APPROOT . '/views/includes/header.php';  ?>



<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
        <label for="AdminEmail">Email</label>
        <input type="text" class="form-control" id="AdminEmail" name="AdminEmail" placeholder="Please enter your email">
    </div>
    <div class="form-group">
        <label for="AdminPassword">Password</label>
        <input type="password" class="form-control" id="AdminPassword" name="AdminPassword" placeholder="Please enter your password">
    </div>
    <div> 
        <button type="submit" name="login" class="btn btn-primary">Sign in</button>
        <p class="text-center">Not an Admin? <a href="/TermProject/Login/">Login</a> </p>
    </div>
    <?php
?>
</form>



<?php require APPROOT . '/views/includes/footer.php'; ?>