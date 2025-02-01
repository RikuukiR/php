<?php
// foreachループ:
// 配列$colorsの各要素に対して反復処理が行われます。
// ループごとに、配列の次の要素が$colorに代入され、色が表示されます。
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo nl2br("色は: $color\n");
}

// キーを使用するとき
foreach ($colors as $k => $color) {
    echo nl2br("{$k} => {$color} ");
}
