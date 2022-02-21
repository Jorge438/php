<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
        <style>

            table,
            td {
                border: 1px solid #333;
            }

            thead,
            tfoot {
                background-color: #333;
                color: #fff;
            }

            .before_reduc {
            color: red;
            text-decoration:line-through;
            }

            .after_reduc {
            color: #2ED800;
            }

        </style>
    </head>
    <body>
    
    <?php include 'my-functions.php' ;
    include 'data.php';
    require 'database.php'; ?>
      

    <?php 
    

    $order_product_id50 = order_product_id50($db);
    var_dump($order_product_id50);
    echo "<br>";
    echo "<br>";
    $f=all_product($db);
    

    //var_dump($f[]);

    foreach($order_product_id50 as $value) {
       // $productsStatement = $db->query("SELECT * FROM products WHERE `id`= ".  $value['product_id'] ." ");
        //echo '<div class="'. $value['id'][$value['product_id']] .'">';
        
    
        echo '</div>';
        //var_dump($value);
    }
    

    ?>
            
        

        

    </body>
</html>