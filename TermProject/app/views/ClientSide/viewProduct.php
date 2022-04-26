<?php require APPROOT . '/views/includes/header.php'; 
?>

<div class="height d-flex justify-content-center align-items-center">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
                <h4 class="text-uppercase"><?php echo $data->ProductName?></h4>
                <div class="mt-5">
                    <h5 class="text-uppercase mb-0"><?php echo $data->ProductPrice?></h5>
                </div>
            </div>
            <?php
                echo'<div class="image"><img src="'.URLROOT.'/public/img/'.$data->picture.'" width="500" height="500"></div>'
            ?>
        </div>
        <p><?php echo $data->ProductDescription?></p> 
        <button id='addToCart' name='addToCart' class='btn btn-success'><?php echo "<a href='/TermProject/Home/AddCart/$data->UPC'>Add to cart </a>"?></button>
    </div>
</div>
   
<?php require APPROOT . '/views/includes/footer.php'; ?>