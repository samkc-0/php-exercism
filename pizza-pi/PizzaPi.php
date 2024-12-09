<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $people): int
    {
        return $pizzas * (($people * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauce_can_volume): int
    {
        $sauce_per_pizza = 125;
        return $pizzas * $sauce_per_pizza / $sauce_can_volume;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter): int
    {
        return intval(pow($cheese_dimension, 3) / ($thickness * M_PI * $diameter));
    }

    public function calculateLeftOverSlices($num_pizzas, $num_friends): int
    {
        $total_num_slices = 8 * $num_pizzas;
        return $total_num_slices % $num_friends;
    }
}
