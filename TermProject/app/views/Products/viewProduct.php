<?php require APPROOT . '/views/includes/header.php'; 
?>

<article>
    <figure>
        picture will be here
    </figure>
    <h3><?php echo $productToSend->ProductName?></h3>
    <p><?php echo $productToSend->ProductDescription?></p>
</article>
<form method="POST">
    <button id='addToCart' name='addToCart' class='btn btn-success'><a href='/TermProject/Cart/userCart'></a> Add to cart</button>
</form>
   
<?php require APPROOT . '/views/includes/footer.php'; ?>