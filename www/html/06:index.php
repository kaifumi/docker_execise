<!-- if , else if , else を使用して50点未満なら「不可」、50点以上65点未満なら「可」、65点以上80点未満なら「良」、80点以上なら「優」というコードを作成してください。そして、70点の場合の結果を表示させてください。 -->
<?php

$number = 70;
if ($number >= 80) {
    echo "「優」";
} else if ($number >= 65) {
    echo "「良」";
} else if ($number >= 50) {
    echo "「可」";
} else {
    echo "「不可」";
}

