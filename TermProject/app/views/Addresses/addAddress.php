<?php require APPROOT . '/views/includes/header.php'; 
?>

    <h1>Add an address</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="Address">Address</label>
        <input name="Address" type="text" class="form-control" id="Address">
    </div><div class="form-group">

    <button type="submit" name='add' class="btn btn-primary">Add</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>