<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple-catalog</title>
</head>
<body>
    
<?php
    $products = ["iPhone", "iPad", "iMac"];
?>
<p> <?php echo implode(",",$products); ?> </p>
<p> ordre croissant : <?php
    asort($products);
    echo implode(",",$products);?>
</p>
<p> premier produit : <?php echo $products[0] ?> </p>
<p> dernier produit : <?php echo $products[2] ?></p>

</body>
</html>