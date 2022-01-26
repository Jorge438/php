<?php 
    function format_price($price_in_cents) {
        $price_in_cents = $price_in_cents/100;
        return $price_in_cents;
    }
?>