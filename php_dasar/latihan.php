<?php


function balikKata($str)
{
    $kata = explode(" ", $str);
    // $hasil = implode(" ", array_reverse($kata));
    $hasil = array_map('strrev', $kata);
    // return strrev($hasil);
    return implode(" ", $hasil);
}

echo balikKata("Hello World PHP");

echo "<br>";
function palindrom($str)
{
    $deleteSpaci = str_replace(" ", "", $str);
    $kataLower = strtolower($deleteSpaci);
    // if ($kataLower == strrev($kataLower)) {
    //     return true;
    // } else {
    //     return false;
    // }
    return $kataLower == strrev($kataLower) ? true : false;
}
var_dump(palindrom("Katak"));
//  palindrom("Katak"); ? true : false

echo "<br>";
function kompres($str)
{
    if ($str == "") {
        return $str;
    }
    $panjang = strlen($str);
    $hasil = "";
    $count = 1;
    for ($i = 0; $i < $panjang - 1; $i++) {
        if ($str[$i] == $str[$i + 1]) {
            $count++;
        } else {
            $hasil .= $str[$i] . $count;
            $count = 1;
        }
    }
    $hasil .= $str[$panjang - 1] . $count;
    $hasilPanjang  = strlen($hasil);
    if ($hasilPanjang  > $panjang) {
        return $str;
    } else {
        return $hasil;
    }
}

echo kompres("aaabbbccddddee");


echo "<br>";
function bubleSort($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp  = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// print_r(bubleSort([64, 34, 25, 12, 22, 11, 90]));
echo implode(", ", bubleSort([64, 34, 25, 12, 22, 11, 90]));

echo "<br>";
function bubbleSortByKey($arr, $key)
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        $swap = false;

        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($arr[$j][$key] > $arr[$j + 1][$key]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $swap = true;
            }
        }
        if (!$swap) {
            break;
        }
    }
    return $arr;
}
print_r(bubbleSortByKey([
    ['nama' => 'Citra', 'nilai' => 80],
    ['nama' => 'Ani', 'nilai' => 95],
    ['nama' => 'Budi', 'nilai' => 70],
], 'nilai'));

echo "<br>";
function selectionSort($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex !== $i) {
            $simpanSementara = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $simpanSementara;
        }
    }
    return $arr;
}

echo implode(", ", selectionSort([29, 10, 14, 37, 13]));

echo "<br>";
function selectionSortFlex($arr, $order = '')
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        $selectIndex = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($order == 'asc') {
                if ($arr[$j] < $arr[$selectIndex]) {
                    $selectIndex = $j;
                }
            }
            if ($order == 'desc') {
                if ($arr[$j] > $arr[$selectIndex]) {
                    $selectIndex = $j;
                }
            }
        }
        $nilaiSementara = $arr[$i];
        $arr[$i] = $arr[$selectIndex];
        $arr[$selectIndex] = $nilaiSementara;
    }
    return $arr;
}

echo implode(", ", selectionSortFlex([5, 2, 8, 1, 9], 'desc'));

echo "<br>";
function insertionSort($arr)
{
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}
echo implode(", ", insertionSort([12, 11, 13, 5, 6]));

echo "<br>";
function insertionSortString($arr)
{
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 &&  strtolower($arr[$j]) >  strtolower($key)) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

echo implode(", ", insertionSortString(['Banana', 'apple', 'Cherry', 'date']));
