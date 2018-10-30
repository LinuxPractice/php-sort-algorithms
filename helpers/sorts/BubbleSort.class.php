<?php
namespace helpers\sorts;

/**
 *
 * @author Bill
 *        
 */
class BubbleSort
{

    /**
     * Private contructor to ensure the class cannot be instantiated
     */
    private function __construct()
    {}

    /**
     * Bubble Sort
     *
     * @param array $sortArray
     * @return array
     */
    public static function sort(array $sortArray): array
    {
        $count = count($sortArray);
        for ($i = 0; $i < $count; $i ++) {
            for ($j = 0; $j < $count; $j ++) {
                $n = $j + 1;
                /* Avoid php notice for exceeding bounds of array */
                if (($count - 1) >= $n) {
                    /* if next element is less than the current then swap */
                    if ($sortArray[$n] < $sortArray[$j]) {
                        [
                            $sortArray[$j],
                            $sortArray[$n]
                        ] = array(
                            $sortArray[$n],
                            $sortArray[$j]
                        );
                    }
                }
            }
        }
        return $sortArray;
    }

    /**
     */
    private function __destruct()
    {}
}

