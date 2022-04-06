<?php require APPROOT . '/views/includes/header.php'; 
?>
    <form method="POST">
        <label>Search for a product:</label>
        <input type="text" id="searchBar" name="searchBar" placeholder="Search...">
        <button type="submit" name="searchButton" class='btn btn-dark'>Search</button>
    </form>
    <h2>Results</h2>
    <table class="table">
        <thead class="table-light">
        </thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scrop="col" colspan="2" class="text-center"> Actions</th>
            </tr>
        <tbody>
            <?php 
                foreach($data as $result){
                    echo"<tr>";
                    echo '<td> Picture of product will be here</td>';
                    echo"<td>$result->ProductName</td>";
                    echo"<td>$result->ProductPrice</td>";
                    echo"<td>
                    <button id='viewProduct' name='viewProoduct' class='btn btn-primary'><a href='TermProject/Home/viewProduct/$result->UPC'> View </a></button>
                    </td>";
                    echo"<td>
                    <form method='POST'>
                    <button id='addToCart' name='addToCart' class='btn btn-success'><a href='TermProject/Home/AddCart/$result->UPC'>Add to cart </a></button>
                    </form>
                    </td>";
                    echo"</tr>";
                }
        
            ?>
        </tbody>
    </table>
<?php require APPROOT . '/views/includes/footer.php'; ?>