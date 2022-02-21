<?php 
 require 'database.php';



$productsStatement = $db->prepare('SELECT * FROM products');
$productsStatement->execute();
$products = $productsStatement->fetchAll();

echo "<h2>". "Liste des produits où il n'y a plus de stock" ."</h2>";
$test1 = Query_list_of_product_stock_0($db);
var_dump($test1);

echo "<h2>". "liste des commandes depuis les 10 derniers jours" ."</h2>";
$test2 = Query_list_of_order_since_ten_days($db);
var_dump($test2);

echo "<h2>". "Liste de toutes les commandes" ."</h2>";
$test3 = Query_list_of_orders($db);
var_dump($test3);

echo "<h2>". "Montant total des commandes d'aujourd'hui" ."</h2>";
$test4 = Query_total_price_today_order($db);
var_dump($test4);


//foreach($products as $truc){
//        foreach($truc as $chose => $machin){
//    echo  $chose ;
//    echo '<br>';
//         }
//    echo '<br>';
//    echo '<br>';
//}
?>