<?php
function fastsort(array $array){
    if(count($array) <= 1){
        return $array;
    }
    else{
        $pivot = $array[0];//опорка
        $left = array();
        $right = array();
        for($i = 1; $i < count($array); $i++)
        {
            if($array[$i] < $pivot){
                $left[] = $array[$i];
            }
            else{
                $right[] = $array[$i];
            }
        }
        return array_merge(fastsort($left), array($pivot), fastsort($right));
    }
}

