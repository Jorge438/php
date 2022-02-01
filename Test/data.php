<?php 


$products = [

    "salas" => [
        "name" => "Marcelo Salas jersey",
        "price" => format_price(79900),
        "price_excl_tax" => price_excluding_vat(displayDiscountedPrice(format_price(79900),10)),
        "weight" => 110,
        "discount" => 10,
        "price_after_discount" => displayDiscountedPrice(format_price(79900),10),
        "picture_url" => "img/salas.jpg"
    ],

    "sanchez" => [
        "name" => "Alexis Sanchez Jersey",
        "price" => format_price(89900),
        "price_excl_tax" => price_excluding_vat(displayDiscountedPrice(format_price(89900),5)),
        "weight" => 110,
        "discount" => 5,
        "price_after_discount" => displayDiscountedPrice(format_price(89900),5),
        "picture_url" => "img/sanchez.jpg"
    ],

    "medel" => [
        "name" => "Gary Medel Jersey",
        "price" => format_price(54900),
        "price_excl_tax" => price_excluding_vat(displayDiscountedPrice(format_price(54900),15)),
        "weight" => 110,
        "discount" => 15,
        "price_after_discount" => displayDiscountedPrice(format_price(54900),15),
        "picture_url" => "img/medel.jpg"
        ]

];



$carrierlist = [

    "poste" => [
        "name" =>"La Poste",
        "neutral_price" => 5,
    ],  

    "chronoposte" => [  
        "name" =>"Chronoposte",
        "neutral_price" => 10,
    ],

]

?>