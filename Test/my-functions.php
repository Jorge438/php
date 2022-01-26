<?php 
    function format_price($price_in_cents) {
        $price_in_cents = $price_in_cents/100;
        return $price_in_cents;
    }

    function price_excluding_vat($price_incl_tax) {
        $price_excl_tax = (100*$price_incl_tax)/(100+10);
        return $price_excl_tax;
    }
?>