<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Responses to your requests from the seller</h1>
        <?php
        if ($data["responses"] != null) {
            echo "<table  class='table table-bordered'>";
            echo"<tr>";
            echo "<td>Response</td>";
            echo "<td colspan='3' class='text-center'> Actions</td>";
            echo "</tr>";
            foreach($data["responses"] as $responses){
                
                echo"<tr>";
                echo"<td>$responses->ResponseTitle</td>";
                echo"<td>$responses->ResponseText</td>";
                echo"</tr>";
            }
        }else {
                echo"Apparently, your inbox of responses is empty!";
            }
            echo '<a style="color:green" class="nav-link" href="/TermProject/Contact/displayContact"><i class="fa-solid fa-profile"></i> Send a request to the seller </a></li>';
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>