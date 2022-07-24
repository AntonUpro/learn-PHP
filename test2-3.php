<?php 
$hamburger = 4.95; 
$shake = 1.95; 
$cola = 0.85; 
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = (2*$hamburger) + $shake + $cola; 
$tip = $food*$tip_rate; 
$tax = $food*$tax_rate; 
$total = $food + $tip + $tax;
printf ("%d %-9s at \$%.2f each: \$%5.2f\n" , 2, 'Гамбургер', $hamburger, 2*$hamburger);
printf ("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake', $shake, $shake);
printf ("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Cola', $cola, $cola);
printf ("%-25s \$ %5.2f \n", 'Total food:', $food);
printf ("%-25s \$ %5.2f \n", 'Food and Tax Total:', $tax+$food);
printf ("%-25s \$ %5.2f \n", 'Food? Tax and Tip Total:', $total);
?>