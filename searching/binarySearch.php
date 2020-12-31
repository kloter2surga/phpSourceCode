<?php
function binary_search(array $list, $item)
{
    $low = 0;
    $high = sizeof($list) - 1;

    while ($low <= $high) {
        $mid = $low + $high;
        $guess = $list[$mid];

        if ($guess == $item) {
            return $mid;
        }

        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return null;
}


print(binary_search([1, 3, 5, 7, 9], 3));   // => 1
print(binary_search([1, 3, 5, 7, 9], -1));   // => null
