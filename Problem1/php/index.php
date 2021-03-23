<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$obj = $_POST['pattern'];

// ここに処理を記述してください。

// Probrem1
$array = json_decode($obj)->obj;

$ans = "";
for ($i = 1; $i <= 30; $i++) {
    $txt_i = "";
    foreach ($array as $value){
        if ($i % $value->num == 0) {
            if ($txt_i != "") {
                $txt_i = $txt_i . " ";
            }
            $txt_i = $txt_i . $value->text;
        }
    }
    
    if ($txt_i != "") {
        $ans = $ans . $txt_i . ", ";
    } else {
        $ans = $ans . $i . ", ";
    }
}

echo($ans);
?>