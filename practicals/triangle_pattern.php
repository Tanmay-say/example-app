<?php
// Define the number of rows
$rows = 5;

// Iterate to print the pattern
for ($i = $rows; $i >= 1; --$i) {
    for ($j = 1; $j <= $i; ++$j) {
        echo "* ";
    }
    echo "\n";
}
?>

