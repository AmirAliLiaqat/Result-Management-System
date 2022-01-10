<?php
    /***************** Function 1 Main Array ***************/
    $numbers = [45,46,78,78,89,90,99,23,56];

    /***************** Function 2 Print the Array ***************/
    function printArray($array) {
        $countArray = count($array);
        for($x = 0; $x < $countArray; $x++) {
            $array[$x] . "<br>";
        }
    }
    printArray($numbers);

    /***************** Function 3 Ascending the Array ***************/
    function ascending($array) {
        $countArray = count($array);
        sort($array);
        for($x = 0; $x < $countArray; $x++) {
            $array[$x] . "<br>";
        }
    }
    ascending($numbers);

    /***************** Function 4 Descending the Array ***************/
    function descending($array) {
        $countArray = count($array);
        rsort($array);
        for($x = 0; $x < $countArray; $x++) {
            $array[$x] . "<br>";
        }
    }
    descending($numbers);

    /***************** Function 5 Highest Marks in the Array ***************/
    function highest($array) {
        $max = $array[0];
        foreach($array as $arr) {
            if($arr > $max) {
                $max = $arr;
            }
        }
        return $max;
    }
    highest($numbers);

    /***************** Function 6 Lowest Marks in the Array ***************/
    function lowest($array) {
        $min = $array[0];
        foreach($array as $arr) {
            if($arr < $min) {
                $min = $arr;
            }
        }
        return $min;
    }
    lowest($numbers);

    /***************** Function 7 Total Marks ***************/
    function totalMarks($array) {
        $countArray = count($array);
        $totalMarks = 100 * $countArray;
        return $totalMarks;
    }
    totalMarks($numbers);

    /***************** Function 8 Sum the Array ***************/
    function sum($array) {
        $countArray = count($array);
        $totalsum = 0;
        for($x = 0; $x < $countArray; $x++) {
            $totalsum = $totalsum + $array[$x];
        }
        return $totalsum;
    }
    sum($numbers);

    /***************** Function 9 Total Sum the Array ***************/
    function total($array) {
       $totalMarks = totalMarks($array);
       $obtainMarks = sum($array);
       $totalSum = "$obtainMarks / $totalMarks";
        return $totalSum;
    }
    total($numbers);

    /***************** Function 10 Percentage of the Array ***************/
    function percentage($array) {
        $totalMarks = totalMarks($array);
        $obtainMarks = sum($array);
        $totalSum = $obtainMarks / $totalMarks * 100;
        return $totalSum;
    }
    percentage($numbers);

    /***************** Function 1 Average of the Array ***************/
    function average($array) {
        $totalMarks = totalMarks($array);
        $obtainMarks = sum($array);
        $totalSum = $obtainMarks / $totalMarks;
        return $totalSum;
    }
    average($numbers);

    /***************** Function 12 Grade of the Array ***************/
    function grade($array) {
        $result = percentage($array);
        if($result >= 90) {
            echo "A";
        } elseif($result >= 70) {
            echo " B";
        } elseif($result >= 50) {
            echo " C";
        } else {
            echo " D";
        }
    }
    grade($numbers);
?>