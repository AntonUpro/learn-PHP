<?php 
$price_gamb=4.95*2;
$price_kokt=1.95;
$price_coca=1.95;
$sum_price=$price_gamb+$price_kokt+$price_coca;
$NDS=$sum_price*0.075;
$tips=$sum_price*0.16;
$sum=$sum_price+$NDS+$tips;
print $sum;
?>