<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test php</title>
    <meta names="desciption" content="Catalogues des diférents continents et pays où se trouvent des activités.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="catalogue.css">
    <style>

body {
    padding:0;
    margin:0;
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
    </style>
</head>

<body>

<?php

$name = "Billets d'avion";
$price = "1000 €";
$picture_url = "./billet_avion.png";

 ?>

<?php include 'my-functions.php' ?>

<?php include 'header.php' ?>

<h1> <?php echo $name; ?> </h1>
<img src="<?php echo $picture_url; ?>" alt="Billet">
<p><?php echo $price; ?></p>

<?php include 'footer.php' ?>

</body>
</html>