<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Your Cards</h1>
        <?php
        if ($data["cards"] != null) {
            echo "<table  class='table table-bordered'>";
            echo"<tr>";
            echo "<td>Card Number</td>";
            echo "<td>Name on the card</td>";
            echo "<td colspan='3' class='text-center'> Actions</td>";
            echo "</tr>";

            foreach($data["cards"] as $cards){
                
                echo"<tr>";
                echo"<td>$cards->ClientCardNumber</td>";
                echo"<td>$cards->CardName</td>";
                echo"<td>
                <a style='color:green' href='/TermProject/Cards/delete/$cards->CardId'> Remove</a>
                </td>";
                echo"</tr>";
            }
        }else {
                echo"Apparently, you have not added any card yet!";
            }
            echo '<a style="color:green" class="nav-link" href="/TermProject/Cards/addCard"><i class="fa-solid fa-profile"></i> Add a card </a></li>';
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>