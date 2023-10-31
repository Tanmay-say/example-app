<?php
// Function to generate Fibonacci sequence
function generateFibonacci($n) {
    // Initialize an array to store the Fibonacci sequence
    $fibonacciSequence = [];

    // First two numbers in the Fibonacci sequence
    $fibonacciSequence[] = 0;
    $fibonacciSequence[] = 1;

    // Generate the Fibonacci sequence
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    // Return the generated Fibonacci sequence
    return $fibonacciSequence;
}

// Define the number of elements in the Fibonacci sequence
$numberOfElements = 10;

// Generate the Fibonacci sequence
$fibonacciSequence = generateFibonacci($numberOfElements);

// Display the Fibonacci sequence
echo "The Fibonacci sequence with $numberOfElements elements: \n";
echo implode(", ", $fibonacciSequence);
?>

