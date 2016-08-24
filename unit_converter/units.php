<?php
//  Number in pounds that we want to convert to kilograms.
$pounds = 140;
//  Floating point value for the pound to kilogram conversion
$lb_to_kg = 0.453592;
// Use the varaiables to calculate pounds multiplied by the kilogram conversion
$kilograms = $pounds * $lb_to_kg;
// Display the pounds to kilograms
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";

?>

<?php

// Number in miles we want to convert to kilometers.

$miles = 2.5;
// Floating point value for the miles to kilometer coversion.
$miles_to_km = 1.60934;
// Use the variable above to calculate miles multiplied by the kilometer conversion.
$kilometers = $miles * $miles_to_km;
// Display miles to kilometers.
echo "Distance ";
echo $miles;
echo " Miles = ";
echo $kilometers;
echo " km";

?>

<?php
  // Number of kilometes we want to convert to miles.
  
  // Kilometers input
  $kilometers = 2.5;
  // Km to miles conversion rate
  $km_to_miles = 1.60934;
  // Conversion logic
  $miles = $kilometers / $km_to_miles;

  echo "Distance ";
  echo $kilometers;
  echo " Kilometers = ";
  echo $miles;
  echo " miles";

?>

<?php
  // Convert Celsius to Kelvin
  
  // Celsius input
  $celsius = 32;

  // Kelvin to celsius conversion rate
  $celsius_to_kelvin = 273.15;

  // Conversion logic
  $kelvin = $celsius + $celsius_to_kelvin;

  echo "Temperature ";
  echo $celsius . ' degrees';
  echo " Celsius = ";
  echo $kelvin;
  echo " degrees kelvin";

?>