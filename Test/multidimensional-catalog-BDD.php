<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-with-keys</title>
    <meta names="desciption" content="Catalogues des diférents continents et pays où se trouvent des activités.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="catalogue.css">
    <style>

body {
    padding:0;
    margin:0;
}

main {
    display : flex;
    justify-content: center; 
    flex-direction:row;
    text-align: center;
    flex-wrap: wrap;
    background-color: green;
}


main div {
    background-color: red;
    margin: 2rem 5rem 5rem 5rem;
    display: flex;
    flex-direction: column;
    border: black;
    width: auto;
}

.navbar-brand img {
    height: 50px;
    width: 60px;
}

.contenue{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer {
    width: 100%;
    height: auto;
    background-color: black;
    display: flex;
    justify-content: center;
    align-content: space-between;
}

h1 {
    margin: 1rem;
}

.footer ul {
    list-style-type: none;
    text-align: center;
    margin: 2rem 0 0rem 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: space-between;
    height: 15rem;
}
.footer li {
    color: white;
    font-size: 2rem;
    font-family: 'Cabin', sans-serif;
}
.footer a {
    text-decoration: none;
    color: white;
}
.icone {
    margin: 2rem 2rem 0 2rem;
    width: 35px;
    height: 35px;
}

img {
    margin: 25px,25px,25px,25px;
    width : 225px;
    height: 200px;
}

.first, .second, .third {
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.btn_commander {
    margin-top: -5rem;
    width: 50%;
    background-color: #607DFF;
    color: white;
    border: none;
    border-radius: 5px;
}

.dynamic_cart{
    position: absolute;
    background-color: lightblue;
    width: 15rem;
}

.before_reduc {
    color: red;
    text-decoration:line-through;
}

.after_reduc {
    color: #2ED800;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}



    </style>
</head>
<body>
    
<?php include 'my-functions.php';
include 'data.php'; 
include 'header.php'; 
require 'database.php';

if (count($_POST) !== 0){
$productsStatement = $db->query("INSERT INTO order_product (`order_id`,`product_id`,`quantity`) VALUE ( 50,'$_POST[product_id]','$_POST[quantity]')      ");
header("Location: /boutique/Test//multidimensional-catalog-BDD.php");
die();
}


?>

<div class="dynamic_cart">


<?php
    if (count($_POST) == 0){
        echo "vide";
    }

  else {
      echo "<p> Vous avez choisi " . $_POST['quantity'] . $_POST['product_name'];

    }
    
    echo '<a href="cart_BDD.php"> Voir votre pannier </a>';
?>
</div>



<main>

<?php
//for($i=1; $i > Number_of_product($db) ;$i++){
//    echo $i;
//    echo '<br>';
//}


?>




<?php

$f=all_product($db);
foreach($f as $value) {
    echo '<div class="'. $value['id'] .'">';
    echo '<form method="post" action="multidimensional-catalog-BDD.php">';

    echo $value["name"];
    echo '<img src="' . $value["image"] .  '">';
    echo $value["price"] . " Deniers";

    echo '<div>Quantité : <input type="number" name="quantity" min="0" max="10" placeholder="1"></div>';
    echo '<input type="submit" value="Commander" class="btn_commander">';
    ?>
        <input type="hidden" name="product_id" value=" <?= $value['id'] ?> ">
        <input type="hidden" name="product_name" value=" <?= $value['name'] ?> ">
    </form>
    <?php

    echo '</div>';
    //var_dump($value);
}

?>


</main>

    


<?php include 'footer.php' ?>

</body>
</html>



<!--    <p>

       <?php /* foreach ($products as $player) {
            foreach($player as $description => $detail) {
                echo " $player | $description : $detail " . "<br>";
            }
             echo "<br>";
        }
        */ ?>
        </p>
    -->