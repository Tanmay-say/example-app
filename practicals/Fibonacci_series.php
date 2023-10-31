<?php
// Function to generate Fibonacci sequence
function generateFibonacci($n) {
    $fibonacciSequence = [];
    if ($n > 0) {
        $fibonacciSequence[] = 0;
    }
    if ($n > 1) {
        $fibonacciSequence[] = 1;
    }
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    return $fibonacciSequence;
}

// Define the number of elements in the Fibonacci sequence
$n = 10;

// Generate the Fibonacci sequence
$fibonacciSequence = generateFibonacci($n);

// Print the Fibonacci sequence
echo "The Fibonacci sequence with $n elements: \n";
echo implode(", ", $fibonacciSequence);
?>

