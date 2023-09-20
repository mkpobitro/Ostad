<?php
// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.

$first = 1;
$second = 2;
$count = 10;
echo "$first, $second ";

for ($i = 3; $i <= $count; $i++) {
    $next = $first + $second;
    $first = $second;
    $second = $next;
    if ($next >= 100) {
        break;
    }
    echo ", $next ";
}
