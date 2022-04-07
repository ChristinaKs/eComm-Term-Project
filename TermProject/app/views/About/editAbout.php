<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/getProducts">Get Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/TermProject/Products/createProducts">Create Products</a>
      </li>
    </ul>
  </div>
</nav>

    <h1>Update Products View</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="firstparagraph">First Paragraph</label>
        <input name="firstparagraph" type="text" class="form-control" id="firstparagraph" value="<?php echo $data->firstparagraph?>">
    </div><div class="form-group">
        <label for="secondparagraph">Second Paragraph</label>
        <input name="secondparagraph" type="text" class="form-control" id="secondparagraph" value="<?php echo $data->secondparagraph?>">
    </div><div class="form-group">
        <label for="thirdparagraph">ThirdParagraph</label>
        <input name="thirdparagraph" type="text" class="form-control" id="thirdparagraph" value="<?php echo $data->thirdparagraph?>">
    

    <button type="submit" name='update' class="btn btn-primary">Update</button>
    <button type="submit" name='cancel' class="btn btn-primary">Cancel</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>