<?php
  $name = 'Chris';
  $stringOne = "Learning to display \"hello $name!\" to the screen.";
  $stringOne = 'Learning to display "hello ' . $name . '!" to the screen.';
  echo $stringOne;

?>