<Style>
    
    

</Style>

<?php



require 'database.php';

class Item {
    public int $price, $weight, $quantity, $discount;
    public string $name, $description, $image;
    public bool $available;
}

//<?php

function displayItem($Item) {
     echo   "<div class=\" $Item->name \">
            <H2> $Item->name </H2>
            <img src=\"$Item->image\" alt=\"\" width=\"350\" height=\"300\">
            <p>  $Item->price  € </p>
        
            </div>";
    
}

class Catalogue {
    public array $all_items;
    public function __construct($db){
        $productsStatement = $db->query('SELECT * FROM `products`');
        $this->all_items = $productsStatement->fetchAll(PDO::FETCH_ASSOC);
    }
}

function displayCatalogue() {

}

class Client {

}

class ClientList {

}

function list_product($db){

};

$list = new Catalogue($db);

$Product_1 = new Item();
$Product_1->price = 100;
$Product_1->weight = 1000;
$Product_1->quantity = 25;
$Product_1->name = 'Truc';
$Product_1->description = "C'est un truc cool";
$Product_1->image = "https://www.renault-trucks.com/sites/corporate/files/styles/style_content_teaser/public/2021-04/Renault%20Trucks%20range%202021.png?h=fbce0e9c&itok=mMv7skwe";
$Product_1->available = 1;

echo "<br>";
echo "<br>";
echo "<br>";

var_dump($Product_1->price);

displayItem($Product_1);

?>