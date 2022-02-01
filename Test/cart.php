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
    
    <?php include 'my-functions.php' ?>
    <?php include 'data.php' ?>

        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php 
          //  echo 'sanchez_shirt : '.$_POST["sanchez_shirt"].'<br>';
          //  echo 'salas_shirt : ' .$_POST["salas_shirt"].'<br>';
          //  echo 'medel_shirt : ' .$_POST["medel_shirt"].'<br>';
          
          $quantity = $_POST["quantity"]; 
          $shirt_name = $_POST["shirt_name"];
          $totalweight = $quantity * $products["$shirt_name"]["weight"];
          $totalprice_TTC = $quantity *  $products["$shirt_name"]["price_after_discount"];
          var_dump($totalweight);
          var_dump($totalprice_TTC);
        ?>
            
        

        <table>
            <thead>
                <tr>
                    <th colspan="1">Produit</th>
                    <th colspan="1">prix unitaire</th>
                    <th colspan="1">Quantité</th>
                    <th colspan="1">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $products["$shirt_name"]["name"]; ?></td>
                    <td><?php echo "<div class='before_reduc'>" . $products["$shirt_name"]["price"] . " €"  . "  -" . $products["$shirt_name"]["discount"] . "%" . "</div>" ."<br>";
                              echo "<div class='after_reduc'>" . $products["$shirt_name"]["price_after_discount"] . " €" . "</div>" . "<br>"; 
                              ?></td>
                    <td> <?php echo $quantity; ?> </td>
                    <td> <?php echo $quantity *  $products["$shirt_name"]["price_after_discount"] . " €"; ?></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td>Total HT</td>
                    <td> <?php echo $quantity *  $products["$shirt_name"]["price_excl_tax"] . " €"; ?> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td>TVA</td>
                    <td> <?php echo ($quantity *  $products["$shirt_name"]["price_after_discount"]) - ($quantity *  $products["$shirt_name"]["price_excl_tax"]) . " €"; ?> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td>Total TTC</td>
                    <td><?php echo $quantity *  $products["$shirt_name"]["price_after_discount"] . " €"; ?> </td>
                </tr>
            </tbody>
        </table>

        <form method="post">
            <select name="carrier" id="pet-select">
                <option value="poste">La poste</option>
                <option value="chronoposte">Chronoposte</option>
            </select>
            <input type="submit" value="Valider">
            <input type="hidden" name="quantity" value="<?php echo $_POST["quantity"]; ?>"/>
            <input type="hidden" name="shirt_name" value="<?php echo $_POST["shirt_name"];?>"/>
        </form>
            <?php $carrier = $_POST["carrier"];?>

            <p> vous avez choisit : <?php echo $carrier ?> </p>
            <p> Frais de port : <?php echo shipping_fees($totalweight,$totalprice_TTC, $carrierlist["$carrier"]["neutral_price"]);?> € </p>
            <p> Total de votre commande : <?php echo shipping_fees($totalweight,$totalprice_TTC,$carrierlist["$carrier"]["neutral_price"])+$totalprice_TTC;?> € </p>

    </body>
</html>