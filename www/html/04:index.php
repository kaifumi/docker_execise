<!-- for と continue を使用して1から50までの数字の奇数を縦に表示してください。 -->
<?php
for ($i=0; $i<51; $i++) {
    if ($i % 2 === 0) {
        continue;
    } else {
        echo $i . "<br>"; 
    }
}
