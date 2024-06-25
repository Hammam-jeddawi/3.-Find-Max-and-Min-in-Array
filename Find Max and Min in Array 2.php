<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

// Finds the maximum and minimum values in an array of integers.


function findMaxMin(array $array): array
{
if (empty($array)) {
  throw new InvalidArgumentException('The input array cannot be empty');
}

// Validate numeric elements for type safety
if (!array_is_list($array) || !array_filter($array, 'is_numeric')) {
  throw new InvalidArgumentException('Input array must contain only integers');
}

// Initialize max and min with the first element for comparison
$max = $min = $array[0];

// Loop through the array, comparing each element with current max and min
foreach ($array as $currentValue) {
  if ($currentValue > $max) {
    $max = $currentValue;
  } else if ($currentValue < $min) {
    $min = $currentValue;
  }
}

// Return results in an associative array for clarity
return ['max' => $max, 'min' => $min];
}

// Example usage with error handling and clear output
try {
$numbers = [5, 1, 8, 3, 2];
$result = findMaxMin($numbers);

echo "Maximum value: " . $result['max'] . "\n";
echo "Minimum value: " . $result['min'];
} catch (InvalidArgumentException $e) {
echo "Error: " . $e->getMessage();
}

     ?>
  </body>
</html>
