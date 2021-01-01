<?php

/**
* @param array $list
 * @return array
 */
function selection_sort(array $list)
{
    $newList = [];

    $listSize = sizeof($list);

    for ($i = 0; $i < $listSize; $i++) {
        $smallest = find_smallest($list);
        array_push($newList, $list[$smallest]);
        array_splice($list, $smallest, 1);
    }

    return $newList;
}


/**
 * @param array $list
 * @return int|string
 */
function find_smallest(array $list)
{
    $smallest = $list[0];
    $smallestIndex = 0;

    foreach ($list as $key => $item) {
        if ($list[$key] < $smallest) {
            $smallest = $list[$key];
            $smallestIndex = $key;
        }
    }

    return $smallestIndex;
}

/**
 * Usage
 */
var_dump(selection_sort([5, 3, 6, 2, 10])); // => [2, 3, 5, 6, 10]
