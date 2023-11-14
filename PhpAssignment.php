<?php
/*
 * not sure if it will work because lines 12 and 15 kept giving me issues but when I did it differently it would get caught in a loop.
 */
$XL = 10;
$large = 6;
$oneToppings = 1;
$twoToppings = 1.75;
$threeToppings = 2.5;
$fourToppings = 3.35;
$tax = 0.13;

echo "What's your pizza size (large or XL): ";
$pizzaSize = trim(fgets(STDIN));

if ($pizzaSize == "large") {
    $pizzaCost = $large;
} elseif ($pizzaSize == "XL") {
    $pizzaCost = $XL;
} else {
    die("Invalid input. Exiting.\n");
}

echo "How many toppings do you want (1, 2, 3, or 4): ";
$pizzaTop = trim(fgets(STDIN));

if ($pizzaTop == "1") {
    $pizzaCost += $oneToppings;
} elseif ($pizzaTop == "2") {
    $pizzaCost += $twoToppings;
} elseif ($pizzaTop == "3") {
    $pizzaCost += $threeToppings;
} elseif ($pizzaTop == "4") {
    $pizzaCost += $fourToppings;
} else {
    die("Invalid input. Exiting.\n");
}

$subtotal = $pizzaCost;
echo "Subtotal: $" . number_format($pizzaCost, 2) . "\n";

$taxAmount = $tax * $subtotal;
echo "Tax: $" . number_format($taxAmount, 2) . "\n";

$total = $taxAmount + $subtotal;
echo "Total: $" . number_format($total, 2) . "\n";
?>
