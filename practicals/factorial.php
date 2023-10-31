<?php
// Function to calculate the factorial of a number
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Define the number for which you want to calculate the factorial
$number = 5;

// Calculate the factorial
$result = factorial($number);

// Print the result
echo "The factorial of $number is: " . $result;
?>

