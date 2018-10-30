<?php
namespace helpers\sorts;

/**
 *
 * @author Bill
 *        
 */
class MergeSort
{

    /**
     * Private contructor to ensure the class cannot be instantiated
     */
    private function __construct()
    {}

    /**
     * Sort
     *
     * @param array $sortArray
     * @return array
     */
    public static function sort(array $sortArray): array
    {
        if (is_array($sortArray)) {
            $count = count($sortArray);
            $middle = $count / 2;
            if ($count > 1) {
                /* Split array in half */
                $arrayLeft = array_slice($sortArray, 0, $middle);
                $arrayRight = array_slice($sortArray, $middle);
                
                /* recursively split array in half */
                $arrayLeft = self::sort($arrayLeft);
                $arrayRight = self::sort($arrayRight);
                
                /* merge and order the 2 array halfs */
                $merged = self::merge($arrayLeft, $arrayRight);
                
                /*
                 * uncomment to show steps
                 * echo '<pre>';
                 * var_dump($merged);
                 * echo '</pre>';
                 */
            } else {
                $merged = $sortArray;
            }
            return $merged;
        }
    }

    /**
     * Merge and order two arrays
     *
     * @param array $arrayLeft
     * @param array $arrayRight
     * @return array
     */
    private static function merge(array $arrayLeft, array $arrayRight): array
    {
        $tmpMerged = array();
        $indexLeft = $indexRight = 0;
        
        /* Loop through the arrays and reorder the elements */
        while ($indexLeft < count($arrayLeft) && $indexRight < count($arrayRight)) {
            if ($arrayLeft[$indexLeft] > $arrayRight[$indexRight]) {
                $tmpMerged[] = $arrayRight[$indexRight];
                $indexRight ++;
            } else {
                $tmpMerged[] = $arrayLeft[$indexLeft];
                $indexLeft ++;
            }
        }
        
        /* Catch single elements */
        while ($indexLeft < count($arrayLeft)) {
            $tmpMerged[] = $arrayLeft[$indexLeft];
            $indexLeft ++;
        }
        while ($indexRight < count($arrayRight)) {
            $tmpMerged[] = $arrayRight[$indexRight];
            $indexRight ++;
        }
        
        return $tmpMerged;
    }

    /**
     */
    private function __destruct()
    {}
}

