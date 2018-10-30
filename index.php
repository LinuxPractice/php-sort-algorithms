<?php


foreach (glob("helpers\sorts\*.class.php") as $filename) {
    require_once $filename;
}

foreach (glob("helpers\puzzles\*.class.php") as $filename) {
    require_once $filename;
}

use helpers\sorts\MergeSort;
use helpers\sorts\ShellSort;
use helpers\sorts\BubbleSort;
use helpers\sorts\InsertionSort;
use helpers\puzzles\FizzBuzz;

$counter = 20;
$startArray = array();
for($i=0;$i<$counter;$i++){
    array_push($startArray,rand(1,100));    
}

echo "<br>Start: ".implode(',',$startArray)."<br>";
$sortedArray =  MergeSort::sort($startArray);
echo "<br>Merge Sorted: ".implode(',',$sortedArray)."<br>";

$sortedArray =  ShellSort::sort($startArray);
echo "<br>Shell Sorted: ".implode(',',$sortedArray)."<br>";

$sortedArray =  BubbleSort::sort($startArray);
echo "<br>Bubble Sorted: ".implode(',',$sortedArray)."<br>";

$sortedArray =  InsertionSort::sort($startArray);
echo "<br>Insertion Sorted: ".implode(',',$sortedArray)."<br>";


echo "<br>";

