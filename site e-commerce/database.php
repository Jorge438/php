<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=bddforquerytest;charset=utf8', 'Gwendal', '-GB-2038',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

function Query_list_of_product_stock_0 ($db) {
        $productsStatement = $db->prepare('SELECT * FROM `products` WHERE products.quantity = "0"');
        $productsStatement->execute();
        return $productsStatement->fetchAll();
}

function Query_list_of_order_since_ten_days ($db) {
        $productsStatement = $db->prepare("SELECT * FROM orders WHERE date > '2022-02-04' AND date < '2022-02-14';");
        $productsStatement->execute();
        return $productsStatement->fetchAll();
}

function Query_list_of_orders ($db) {
        $productsStatement = $db->prepare('SELECT `number`,SUM(`price`*order_product.`quantity`) AS Prix_total_commande
        FROM order_product
        JOIN products on products.id = product_id
        JOIN orders on orders.id = order_id
        GROUP BY number');
        $productsStatement->execute();
        return $productsStatement->fetchAll();
}

function Query_total_price_today_order ($db) {
        $productsStatement = $db->prepare("SELECT SUM(`price`*order_product.`quantity`) AS Prix_total_commande
        FROM products
        JOIN order_product on order_product.product_id = products.id
        JOIN orders on orders.id = order_id
        WHERE date = CURRENT_DATE;");
        $productsStatement->execute();
        return $productsStatement->fetchAll();
}

function Query_raise_shoes_price_10_purcent ($db) {
        $productsStatement = $db->prepare('UPDATE products
        SET price = price * 1.10
        WHERE `categories_id` = 6');
        $productsStatement->execute();
        return $productsStatement->fetchAll();
}

function Query_delete_product_id_50 ($db) {
        $productsStatement = $db->prepare('DELETE FROM products
        WHERE id = 50');
        $productsStatement->execute();
        return $productsStatement->fetchAll();
}



//$selectAllProducts = $mysqlConnection->query('SELECT * FROM products');
//$productsList = $selectAllProducts->fetchAll();
?>