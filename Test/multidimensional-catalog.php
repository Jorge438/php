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
    flex-direction:column;
    text-align: center;
}

main div {
    margin: 2rem 0 5rem 0;
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
    width : 450px;
    height: 500px;
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

.before_red {
    color: red;
    text-decoration:line-through;
}

.after_red {
    color: lightgreen;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

    </style>
</head>
<body>
    
<?php include 'my-functions.php' ?>

<?php

 $products = [

    "salas" => [
        "name" => "Marcelo Salas jersey",
        "price" => format_price(79900),
        "price_excl_tax" => price_excluding_vat(format_price(79900)),
        "weight" => 110,
        "discount" => 10,
        "price_after_discount" => displayDiscountedPrice(format_price(79900),10),
        "picture_url" => "img/salas.jpg"
    ],

    "sanchez" => [
        "name" => "Alexis Sanchez Jersey",
        "price" => format_price(89900),
        "price_excl_tax" => price_excluding_vat(format_price(89900)),
        "weight" => 110,
        "discount" => 5,
        "price_after_discount" => displayDiscountedPrice(format_price(89900),5),
        "picture_url" => "img/sanchez.jpg"
    ],

    "medel" => [
        "name" => "Gary Medel Jersey",
        "price" => format_price(54900),
        "price_excl_tax" => price_excluding_vat(format_price(54900)),
        "weight" => 110,
        "discount" => 15,
        "price_after_discount" => displayDiscountedPrice(format_price(54900),15),
        "picture_url" => "img/medel.jpg"
        ]

];
?>



<?php include 'header.php' ?>

<main>

    <div class="first">

        <div class="one">
            <img src=" <?php echo $products["sanchez"]["picture_url"] ?>" alt="">
        </div>

        <div class="two">
            <h1> <?php echo $products["sanchez"]["name"] ?> </h1>
            <p class="before_red"> <?php echo $products["sanchez"]["price"] ?> € TTC  </p> 
            <p> - <?php echo $products["sanchez"]["discount"]?> %</p>
            <p class="after_red"> <?php echo $products["sanchez"]["price_after_discount"]?> € TTC </p>
            <p> <?php echo $products["sanchez"]["weight"] ?> grammes </p>
            <form>
                <div>Quantité : <input type="number" id="medel_shirt" name="medel_shirt" min="1" max="10" placeholder="1"></div> 
                <br>
                <input type="submit" value="Commander" class="btn_commander">  
            </form>  
        </div>

    </div>

    <div class="second">

        <div class="one">
            <img src=" <?php echo $products["salas"]["picture_url"] ?>" alt="">
        </div>
        <div class="two">
            <h1> <?php echo $products["salas"]["name"] ?> </h1>
            <p class="before_red"> <?php echo $products["salas"]["price"] ?> € TTC  </p> 
            <p> - <?php echo $products["salas"]["discount"]?> %</p>
            <p class="after_red"> <?php echo $products["salas"]["price_after_discount"]?> € TTC </p>
            <p> <?php echo $products["salas"]["weight"] ?> grammes </p>
            <form>
                <div>Quantité : <input type="number" id="medel_shirt" name="medel_shirt" min="1" max="10" placeholder="1"></div> 
                <br>
                <input type="submit" value="Commander" class="btn_commander">  
            </form>  
        </div>
    </div>

    <div class="third">
        <div class="one">
            <img src=" <?php echo $products["medel"]["picture_url"] ?>" alt="">
        </div>

        <div class="two">
            <h1> <?php echo $products["medel"]["name"] ?> </h1>
            <p class="before_red"> <?php echo $products["medel"]["price"] ?> € TTC  </p> 
            <p> - <?php echo $products["medel"]["discount"]?> %</p>
            <p class="after_red"> <?php echo $products["medel"]["price_after_discount"]?> € TTC </p>
            <p> <?php echo $products["medel"]["weight"] ?> grammes </p>
            <form>
                <div>Quantité : <input type="number" id="medel_shirt" name="medel_shirt" min="1" max="10" placeholder="1"></div> 
                <br>
                <input type="submit" value="Commander" class="btn_commander">  
            </form>  
        </div>

    </div>

    

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