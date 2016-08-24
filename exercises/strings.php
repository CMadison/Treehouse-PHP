<?php
  $name = 'Chris';
  $stringOne = "Learning to display \"hello $name!\" to the screen.";
  $stringOne = 'I am Learning to display "hello ' . $name . '!" to the screen.';
  echo $stringOne;

  // var_dump(1 + "2");

  // $a = 10;
  // $b = '10';

  // var_dump($a == $b);
  // var_dump($a === $b);
  var_dump($stringOne == 'Learning to display "hello Chris!" to the screen.');
?>