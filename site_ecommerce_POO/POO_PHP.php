<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-with-keys</title>
    <meta names="desciption" content="Catalogues des diférents continents et pays où se trouvent des activités.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<?php



require 'database.php';

class Item {
    protected int $price, $weight, $quantity;
    protected ?int $discount;
    protected string $name, $description, $image;
    protected bool $available;

    

    public function setPrice($product_price){
        $this->price = $product_price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setWeight($product_weight){
        $this->weight = $product_weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }
    
}

class Shoes extends Item {
    protected int $size;
    protected string $brand;

    public function __construct($size, $brand)
    {
        $this->size =$size;
        $this->brand =$brand;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
 
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }
    

}

class Disc extends Item {
    protected string $disc_name, $group;

    public function __construct($disc_name, $group)
    {
        $this->disc_name = $disc_name;
        $this->group = $group;
    }

    public function getDisc_name()
    {
        return $this->disc_name;
    }

    public function setDisc_name($disc_name)
    {
        $this->disc_name = $disc_name;

        return $this;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

}

class Jersey extends Item {
    protected string $brand, $team;

    public function __construct($brand, $team)
    {
        $this->brand = $brand;
        $this->team = $team;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

}

//<?php

function displayItem($Item) {
     echo   "<div class=\" ". $Item->getName() ." \">
            <H2> ". $Item->getName()  ."</H2>
            <img src=\" ". $Item->getImage() ." \" alt=\"\" width=\"350\" height=\"300\">
            <p> ". $Item->getPrice() ." € </p>
        
            </div>";
    
}

class Catalogue {
    protected array $all_items;
    public function __construct($db){
        $productsStatement = $db->query('SELECT * FROM `products`');
        $this->all_items = $productsStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_all_items(){
        return $this->all_items;
    }

}

function displayCatalogue($catalogue) {
    foreach($catalogue->get_all_items() as $value){
        $product = new Item();

        $product->setName($value["name"]);
        $product->setImage($value["image"]);
        $product->setPrice($value["price"]);
        //$product->setWeight();
        //$product->setQuantity();
        //$product->setDiscount();
        //$product->setAvailable();
        //$product->setDescription();
    
        displayItem($product);
    }

}

class Client {

}

class ClientList {

}

function list_product($db){

};

$list = new Catalogue($db);




//$Product_1 = new Item();

?>
<body>
    

<?php include 'header.php'; ?>


<?php 
    //foreach($list->all_items as $product){
        
   // }
        
   displayCatalogue($list);
    
        $airmax = new Shoes("5","Nike");
        $airmax->setName("AIR MAX");
        $airmax->setImage("https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ea346e6e-0fc0-4c71-b63b-36e3271baeb0/chaussures-air-max-97-se-pour-FPxPtp.png");
        $airmax->setPrice("500");
   
        displayItem($airmax);

    //displayCatalogue($list);

      //var_dump($Product_1->get_price());
        
?>

<?php include 'footer.php'; ?>

</body>

