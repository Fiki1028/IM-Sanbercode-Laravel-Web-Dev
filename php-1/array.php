<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* SOAL NO 1
        Kelompokkan nama-nama di bawah ini ke dalam Array.
        Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
        Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
    */
    
    // Lengkapi di sini
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; 
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

    echo "<h3> Soal 2: Menampilkan Isi dan Panjang Array </h3>";
    /* SOAL NO 2
        Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
    */
    echo "Cast Stranger Things: ";
    echo "<br>";
    
    // Menampilkan total Kids menggunakan fungsi count()
    echo "Total Kids: " . count($kids); 
    echo "<br>";
    echo "<ol>";
    
    // Menampilkan semua nama Kids menggunakan looping (foreach)
    foreach ($kids as $kid) {
        echo "<li> $kid </li>";
    }

    echo "</ol>";

    // Menampilkan total Adults menggunakan fungsi count()
    echo "Total Adults: " . count($adults); 
    echo "<br>";
    echo "<ol>";
    
    // Menampilkan semua nama Adults menggunakan looping (foreach)
    foreach ($adults as $adult) {
        echo "<li> $adult </li>";
    }

    echo "</ol>";
    
    echo "<hr>";

    echo "<h3> Soal No 3: Array Asosiatif Multidimensi </h3>";
    /*
        SOAL No 3
        Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
    */
    
    // Membuat Array Multidimensi yang berisi Array Asosiatif
    $characters = [
        [
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ],
        [
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ],
        [
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ],
        [
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        ]
    ];
    
    // Menampilkan isi Array Multidimensi
    echo "<pre>";
    print_r($characters);
    echo "</pre>";

    echo "Data Karakter Pertama (Nama): " . $characters[0]["Name"];
    
    ?>
</body>

</html>