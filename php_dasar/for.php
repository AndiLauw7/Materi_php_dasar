


<?php
$bintang = 10;
for ($a = $bintang; $a > 0; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp";
    }
    for ($c = $bintang; $c >= $a; $c--) {
        echo "*";
    }
    echo "<br>";
}

$star = 10;
for ($a = 1; $a <= $star; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo "*";
    }
    echo "<br>";
}

$data = 1;
for ($data; $data <= 10; $data++) {
    echo "Data " . $data . "<br>";
}
