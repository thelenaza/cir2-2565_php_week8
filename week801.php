<?php
function add(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    print("<h1>$a + $b = $add</h1>");
}
function sub()
{
    $a = 10;
    $b = 5;
    $sub = $a - $b;
    print("<h1>$a - $b = $sub</h1>");

}
function mod()
{
    $a = 10;
    $b = 5;
    $mod = $a % $b;
    print("<h1>$a % $b = $mod</h1>");

}
function multi()
{
    $a = 10;
    $b = 5;
    $multi = $a * $b;
    print("<h1>$a * $b = $multi</h1>");

}
function divition()
{
    $a = 10;
    $b = 5;
    $divition = $a / $b;
    print("<h1>$a / $b = $divition</h1>");

}
add(); // called function
print("<hr />");
sub(); // called function
print("<hr />");
mod(); // called function
print("<hr />");
multi(); // called function
print("<hr />");
divition(); // called function
?>