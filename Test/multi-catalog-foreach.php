<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi-catalog-foreach</title>
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
    justify-content: space-between; 
    flex-direction:column;
    text-align: center;
    height: 200rem;
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

.before_reduc {
    color: red;
    text-decoration:line-through;
    margin-bottom: -4rem;
    margin-top: -10rem;
}

.after_reduc {
    color: #2ED800;
    margin-top: -10rem;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

img {
    margin-left: 39%;
    margin-top: -10rem;
}

p{
    font-size: 1.5rem;
}


</style>
</head>

<body>

<?php include 'my-functions.php' ?>

<?php include 'data.php' ?>

<?php include 'header.php' ?>

<main>
           




<?php 
foreach($products as $player){
    foreach($player as $detail => $value){
        if($detail==="name"){
            echo "<h1>" . $value . "</h1>";
            echo "<br>";
        }
        elseif($detail==="picture_url"){
            echo "<img src='" . $value .  "' alt=''>"  ;
            echo "<br>";
        }
        elseif($detail==="price"){
            echo "<p class='before_reduc' > " . $value . " €"  . "</p>";
            
        }
        elseif($detail==="discount"){
            echo "<p> - " . $value . "%</p>";
            echo "<br>";
        }
        elseif($detail==="price_after_discount"){
            echo "<p class='after_reduc' > " . $value . " €" . "</p>";
            echo "<br>";
        }

    }
    echo "<br>";
}
?>


</main>



<?php include 'footer.php' ?>
    
</body>
</html>