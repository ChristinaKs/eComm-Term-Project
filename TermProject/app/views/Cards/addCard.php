<?php require APPROOT . '/views/includes/header.php'; 
?>

    <h1>Add a card</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="CardNumber">Card Number</label>
        <input name="CardNumber" type="text" class="form-control" id="CardNumber">
    </div><div class="form-group">
        <label for="CardName">Name on the card</label>
        <input name="CardName" type="text" class="form-control" id="CardName">
    </div><div class="form-group">

    <button type="submit" name='add' class="btn btn-primary">Add</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>