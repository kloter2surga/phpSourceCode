<?php
function integrate(callable $f, float $from, float $to, float $precision = 1000.0): float
{
    $size = ($to - $from) / $precision;
    $area = 0;

    $x = $from;
    while ($x < $to) {
        $area += $size * ($f($x) + $f($x + $size)) / 2;
        $x += $size;
    }

    return $area;
}
$sinInt = integrate(function ($x) {
    return sin($x);
}, 0, M_PI);
echo 'integral from 0 to PI of sin(x) = ~' . $sinInt . PHP_EOL;
