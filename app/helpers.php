<?php

use App\Models\Discount;

if (!function_exists('calculate_discount')) {
    function calculate_discount($price, $product)
    {
        $discount = $product->discounts;

        $data = [];

        if (!empty($discount)) {

            foreach ($discount as $key => $value) {
                if (number_format($value->start, 2) <= number_format($price, 2) || number_format($value->end, 2) >= number_format($price, 2)) {
                    $data =  $value;
                }
            }
        }
        return $data->percentage;
    }
}

if (!function_exists('discount_price')) {
    function discount_price($price, $percent)
    {
        $discount_value = ($price / 100) * $percent;
        return $price - $discount_value;
    }
}
