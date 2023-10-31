<?php
function generateFibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Example usage: Generate the Fibonacci series up to the 10th number
$series = generateFibonacci(10);
echo "Fibonacci Series: ";
foreach ($series as $num) {
    echo $num . " ";
}
?>

