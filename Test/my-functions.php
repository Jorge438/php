<?php 
    function format_price($price_in_cents) {
        $price_in_cents = $price_in_cents/100;
        return $price_in_cents;
    }

    function price_excluding_vat($price_incl_tax) {
        $price_excl_tax = (100*$price_incl_tax)/(100+20);
        return $price_excl_tax;
    }

    function displayDiscountedPrice($price, $discount) {
        $discounted_price = $price*(1-($discount/100));
        return $discounted_price;
    }

    function shipping_fees($weight, $total_price, $neutral_price) {
        if ($weight < 501) {
            return $neutral_price;
        }
        elseif($weight < 2000) {
            return ($total_price*5+$neutral_price)/(100);
        }
        else { 
            return 0;
        }
    }
?>