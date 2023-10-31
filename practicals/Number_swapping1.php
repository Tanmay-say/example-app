<?php
// Define the two numbers to be swapped
$firstNumber = 5;
$secondNumber = 10;

// Display the numbers before swapping
echo "Before swapping: \n";
echo "First Number: " . $firstNumber . "\n";
echo "Second Number: " . $secondNumber . "\n";

// Perform the number swapping
$temp = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $temp;

// Display the numbers after swapping
echo "After swapping: \n";
echo "First Number: " . $firstNumber . "\n";
echo "Second Number: " . $secondNumber . "\n";
?>

