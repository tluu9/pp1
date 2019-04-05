<?php
function printArr($numbers)
{
foreach ($numbers as $value)
{
echo "$value <br/>";
}
}

function largest()
{
echo "Largest number is " .max(array( 7, 9, 8, 9, 8, 8, 6)). '<br>' ;
}

function average($numbers)
{
$average = array_sum($numbers) / count($numbers);
echo "Average number is " .$average.'<br>' ;
}

function removeDup($numbers)
{
$num_unique = array_unique($numbers);
echo "Here are unique numbers: <br>"  ;
foreach ($num_unique as $unique)
{
echo "$unique <br/>";
}

}

function distribution()
{
$numbers = array( 7, 9, 8, 9, 8, 8, 6 );
$counts = array_count_values($numbers);
echo "Number 6 has $counts[6] <br>";
echo "Number 7 has $counts[7] <br>";
echo "Number 8 has $counts[8] <br>";
echo "Number 9 has $counts[9] <br>";
}




