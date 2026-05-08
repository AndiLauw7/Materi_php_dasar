<!-- array itu adalah tempat menyimpan banyak data didalam 1 variabel -->

<?php
$buah = ["apel", "jeruk", "mangga"];
echo $buah[0];
echo "<br>";
echo $buah[1];

echo "<br>";

foreach ($buah as $key => $value) {
    echo $key + 1 . " : " . $value . "<br>";
}


echo "<br>";

// array assosiative
$user = [
    [
        "nama" => "andi",
        "umur" => 28,
    ],
    [
        "nama" => "andika",
        "umur" => 26
    ]
];

echo $user[0]["nama"];
echo "<br>";
echo $user[0]["umur"];

echo "<br>";

foreach ($user as $users => $value) {
    echo  $users + 1 . " : " . $value["nama"] . " " . $value["umur"] . "<br>";
}
