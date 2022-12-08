<?php
 function add($a,$b)            
 {
    return $a + $b;
 }
 function sub($a,$b)
 {
    return $a - $b;
 }
 function mod($a,$b)            
 {
    return $a % $b;
 }
 function multi($a,$b)
 {
    return $a * $b;
 }
 
 function divition($a,$b)
 {
    return $a / $b;
 }
$total = add(10,5);
print("<h1>$total</h1>"  );
print("<hr />");
$total = sub(10,5);
print("<h1>$total</h1>"  );
print("<hr />");
$total = mod(10,5);
print("<h1>$total</h1>"  );
print("<hr />");
$total = multi(10,5);
print("<h1>$total</h1>"  );
print("<hr />");
$total = divition(10,5);
print("<h1>$total</h1>"  );
?>