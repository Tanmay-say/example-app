<?php
// Function to swap two numbers
function swapNumbers(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Sample numbers
$a = 5;
$b = 10;

// Before swapping
echo "Before swapping: \n";
echo "a = " . $a . "\n";
echo "b = " . $b . "\n";

// Swapping numbers
swapNumbers($a, $b);

// After swapping
echo "After swapping: \n";
echo "a = " . $a . "\n";
echo "b = " . $b . "\n";
?>

