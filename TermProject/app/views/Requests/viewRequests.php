<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Requests form the customers</h1>
        <?php
        if ($data["requests"] != null) {
            echo "<table  class='table table-bordered'>";
            echo"<tr>";
            echo "<td>Request Title</td>";
            echo "<td>Request Text</td>";
            echo "<td colspan='3' class='text-center'> Actions</td>";
            echo "</tr>";
            foreach($data["requests"] as $requests){
                
                echo"<tr>";
                echo"<td>$requests->RequestTitle</td>";
                echo"<td>$requests->RequestText</td>";
                echo"<td>
                <a href='/TermProject/Responses/addResponse/$requests->RequestId'> Answer</a>
                </td>";
                echo"<td>
                <a href='/TermProject/Requests/delete/$requests->RequestId'> Clear</a>
                </td>";
                echo"</tr>";
            }
        }else {
                echo"Apparently, no customer has sent a request yet!";
            }
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>