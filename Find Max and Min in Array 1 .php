<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php



function findMaxMin(array $array): array
{
    // Check if the input array is empty and throw an exception if true
    if (empty($array)) {
        throw new InvalidArgumentException('The input array cannot be empty');
    }

    // Initialize max and min with the first element of the array
    $max = $min = $array[0];

    // Iterate through the array to find the max and min values
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value; // Update max if the current value is greater
        }
        if ($value < $min) {
            $min = $value; // Update min if the current value is smaller
        }
    }

    // Return the results as an associative array
    return ['max' => $max, 'min' => $min];
}

// Example usage with error handling and output
try {
    $numbers = [5, 1, 8, -3, 2, 7];
    $result = findMaxMin($numbers);

    echo "Maximum value: " . $result['max'] . "\n";
    echo "Minimum value: " . $result['min'] . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

?>
  </body>
</html>
