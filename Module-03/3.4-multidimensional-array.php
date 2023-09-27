<?php
//Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / count($grades);
        echo "Average Grade for $student: $averageGrade \n";
    }
}


$studentGrades = [
    'student1' => ['Math' => '84', 'English' => '95', 'Science' => '88'],
    'student2' => ['Math' => '87', 'English' => '78', 'Science' => '84'],
    'student3' => ['Math' => '65', 'English' => '82', 'Science' => '78'],
];
calculateAverageGrades($studentGrades);
