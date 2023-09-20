<?php
// Task 4: Fibonacci Series printing using a Function Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.

function fibonacci($n)
{
    $first = 1;
    $second = 2;
    echo "$first, $second ";

    for ($i = 3; $i <= $n; $i++) {
        $next = $first + $second;
        $first = $second;
        $second = $next;
        echo ", $next ";
    }
}
fibonacci(15);
