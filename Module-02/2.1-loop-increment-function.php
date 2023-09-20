<?php
//Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.


// Function to print even numbers using a for loop
function evenNumbersForLoop($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Function to print even numbers using a while loop
function evenNumbersWhileLoop($start, $end, $step){
    $i = $start;
    while($i <= $end){
        echo $i. " ";
        $i += $step;
    }
}


// Function to print even numbers using a do-while loop
function evenNumbersDoWhileLoop($start, $end, $step){
    $i = $start;
    do{
        echo $i. " ";
        $i += $step;
    }while($i <= $end);
}


echo evenNumbersForLoop(2, 20, 2);
echo evenNumbersWhileLoop(2, 20, 2);
echo evenNumbersDoWhileLoop(2, 20, 2);





