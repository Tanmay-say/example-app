<?php
// Function to calculate the factorial of a number
function calculateFactorial($n) {
    // Base case: if n is 0 or 1, the factorial is 1
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        // Recursive case: calculate factorial using recursion
        return $n * calculateFactorial($n - 1);
    }
}

// Define the number for which you want to calculate the factorial
$number = 5;

// Calculate the factorial of the number
$result = calculateFactorial($number);

// Display the result
echo "The factorial of $number is: " . $result;
?>

