<?php
echo 'Please input arrays:';
echo "\n";

$value = trim(fgets(STDIN));
[$n, $N] = explode(" ", $value);
$n = (int)$n;
$N = (int)$N;

$value = trim(fgets(STDIN));
$array = explode(" ", $value);

if ((int)$array[0] <= $N && $N <= (int)$array[$n-1]) {
    echo "Yes\n";
} else {
    echo "No\n";
};

?>