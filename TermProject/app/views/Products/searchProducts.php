<?php require APPROOT . '/views/includes/header.php'; 
?>
    <form method="POST">
        <label>Search for a product:</label>
        <input type="text" id="searchBar" name="searchBar" placeholder="Search...">
        <button type="submit" name="searchButton" >Search</button>
    </form>
    <?php
        // var_dump($searchResult)
        /*foreach[$searchResult as $result]{
            echo"<tr>";
            echo"<td>$result->ProductName</td>";
            echo"<td>$result->ProductDescription</td>";
            echo"<td>$result->ProductPrice</td>";
            echo"</tr>";
        }*/ 
    ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>