<?php require APPROOT . '/views/includes/header.php'; 
?>
    <form method="POST">
        <label>Search for a product:</label>
        <input type="text" id="searchBar" name="searchBar" placeholder="Search...">
        <button type="submit" id="searchButton" name="searchButton" >Search</button>
    </form>

    <?php
        if($data != []){
            echo '<div class="alert alert-success" role="alert">'.
             $data['msg'].'
          </div>';
        }
    ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>