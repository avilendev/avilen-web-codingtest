<?php
function cal_n($a, $b, $c) {
    // Num of operation.
    $n = 0;

    // Wlog. a <= c.
    if ($a > $c) {
        $_c = $a;
        $a = $c;
        $c = $_c;
    } else if ($a == $c) {
        // requirement of difference.
        $a -= 1;
        $n += 1;
    }

    if ($a == 0) {
        $n = -1;
    // ２番目に大きい整数が A または C である状態
    // iff. Bが一番大きい又は一番小さい.
    } else if ($a <= $b && $b <= $c) {
        if ($a == 1) {
            if ($b <= 2) {
                $n = -1;
            } else {
                $n += $c - $b + 1;
            };
        } else {
            $n1 = $b - $a + 1;  // b goes to min.
            $n2 = $c - $b + 1;  // b goes to max.
            if ($b - $a == 1) {
                $n2 += 1;
            };
            $n += min($n1, $n2);
        };
    };

    return $n;
};


echo 'Please input arrays:';
echo "\n";
$T = (int)trim(fgets(STDIN));

for ($i = 1; $i <= $T; $i++) {
    $value = trim(fgets(STDIN));
    [$a, $b, $c] = explode(" ", $value);
    $array[] = [(int)$a, (int)$b, (int)$c];
};
echo "\n";

foreach ($array as $value){
    echo cal_n($value[0], $value[1], $value[2]);
    echo "\n";
};

?>