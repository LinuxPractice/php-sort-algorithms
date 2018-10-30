<?php
namespace helpers\sorts;

/**
 *
 * @author Bill
 *        
 */
class InsertionSort
{

    /**
     * Private contructor to ensure the class cannot be instantiated
     */
    private function __construct()
    {}

    /**
     * Insertion Sort
     *
     * @param array $sortArray
     * @return array
     */
    public static function sort(array $sortArray): array
    {
        $count = count($sortArray);
        for($i=0;$i<$count;$i++){
            $val = $sortArray[$i];
            $j = $i-1;
            while($j>=0 && $sortArray[$j] > $val){
                $sortArray[$j+1] = $sortArray[$j];
                $j--;
            }
            $sortArray[$j+1] = $val;
        }
        return $sortArray;
    }

    /**
     */
    private function __destruct()
    {}
}

