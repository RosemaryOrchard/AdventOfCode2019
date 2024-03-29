<?php
$input = file_get_contents('../input/day_01.txt');
$input = explode("\n", $input);

function partOne($input)
{
    $totalFuel = 0;
    foreach ($input as $fuel) {
        $totalFuel += floor((int)$fuel / 3) - 2;
    }
    return $totalFuel;
}

function partTwo($input)
{
    $totalFuel = 0;
    foreach ($input as $fuel) {
        $currentFuel = $fuel;
        while ($currentFuel > 0) {
            $temp = floor($currentFuel / 3) - 2;
            if ($temp < 0) $temp = 0;
            $totalFuel += $temp;
            $currentFuel = $temp;
        }
    }
    return $totalFuel;
  
}

print 'Part One: ' . partOne($input);
print "\n";
print 'Part Two: ' . partTwo($input);
