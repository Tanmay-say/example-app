<?php
// Define the number of rows in the inverted triangle
$numberOfRows = 5;

// Iterate to print the inverted triangle pattern
for ($i = $numberOfRows; $i >= 1; $i--) {
    // Print '*' based on the current row number
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    // Move to the next line for the next row
    echo "\n";
}
?>

