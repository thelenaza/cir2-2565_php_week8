<?php
  function add($a,$b){
     $a;
     $b;
     $add = $a + $b;
     print("<h1>$a + $b = $add</h1>");
  }
  function sub($a,$b){
    $a;
    $b;
    $sub = $a - $b;
    print("<h1>$a + $b = $sub</h1>");
  }
  function mod($a,$b)
  {
    $a;
    $b;
    $mod = $a % $b;
    print("<h1>$a + $b = $mod</h1>");
  }
  function multi($a,$b)
  {
    $a;
    $b;
    $multi = $a * $b;
    print("<h1>$a * $b = $multi</h1>");
  }
  function divition($a,$b)
  {
    $a;
    $b;
    $divition = $a / $b;
    print("<h1>$a / $b = $divition</h1>");
  }
  add(10,5);
  print("<hr />");
  sub(10,5);
  print("<hr />");
  mod(10,5);
  print("<hr />");
  multi(10,5);
  print("<hr />");
  divition(10,5);
  print("<hr />");

?>