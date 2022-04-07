<?php require APPROOT . '/views/includes/header.php'; 
?>

<form class="px-4 py-3" method="post" action="">

<div class="form-group">
            <h1>Update Password</h1>
        <div class="form-group">
        <label for="password">Old Password</label>
        <input type="password" class="form-control" id="oldPassword" name="oldPassword">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="newPassword" name="newPassword">
        <label for="password">Re-enter New Password</label>
        <input type="password" class="form-control" id="reEnterPassword" name="reEnterPassword">
        </div>
        <button type="submit" name='updatePassword' class="btn btn-primary"> Update</button>
    </div>

    <?php
        if($data != []){
            echo '<div class="alert alert-danger" role="alert">'.
             $data['msg'].'
          </div>';
        }
    ?>

    <?php require APPROOT . '/views/includes/footer.php'; ?>
