<?php
namespace helpers\sorts;

/**
 *
 * @author Bill
 *        
 */
class ShellSort
{

    /**
     * Private contructor to ensure the class cannot be instantiated
     */
    private function __construct()
    {}

    /**
     * Shell Sort
     *
     * @param array $sortArray
     * @return array
     */
    public static function sort(array $sortArray): array
    {
        $half = round(count($sortArray) / 2);
        $count = count($sortArray);
        
        for ($gap = $half; $gap > 0; $gap--) {
            for ($i = $gap; $i < $count; $i += 1) {
                $temp = $sortArray[$i];
                for ($j = $i; $j >= $gap && $sortArray[$j - $gap] > $temp; $j -= $gap) {
                    $sortArray[$j] = $sortArray[$j - $gap];
                }
                $sortArray[$j] = $temp;
            }
        }
        return $sortArray;
    }

    /**
     */
    private function __destruct()
    {}
}

