<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Your addresses</h1>
        <?php
        if ($data["addresses"] != null) {
            echo "<table  class='table table-bordered'>";
            echo"<tr>";
            echo "<td>Address</td>";
            echo "<td colspan='3' class='text-center'> Actions</td>";
            echo "</tr>";

            foreach($data["addresses"] as $addresses){
                
                echo"<tr>";
                echo"<td>$addresses->Address</td>";
                echo"<td>
                <a href='/TermProject/Addresses/delete/$addresses->AddressId'> Remove</a>
                </td>";
                echo"</tr>";
            }
        }else {
                echo"Apparently, you have not added any address yet!";
            }
            //var_dump($_SESSION);
            echo '<a class="nav-link" href="/TermProject/Addresses/addAddress"><i class="fa-solid fa-profile"></i> Add an address </a></li>';
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>