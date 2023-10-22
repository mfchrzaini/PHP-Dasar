<?php 
// // array
// // elemen pada array boleh memiliki tipe data yang berbeda

// // cara lama
$hari = array("senin","selasa");
// // cara baru
$hari = ["senin", "selasa"];
// mengakses dengan index
echo $hari[0];
echo "<br>";
// // nambah elemen
$hari[] = "rabu";


// menampilkan isi array dengan pengulangan
$nama = ["fachru", "zaini"];
 
for( $i = 0; $i < count($nama); $i++ ) {
    echo $nama[$i]; 
    echo "<br>";
}

// mengguankan for each
foreach($hari as $h) {
    echo $h;
}


// multidimensional array atau array didalam array
$mahasiswa = [
    ["Fachru", 123],
    ["Zaini", 456]
];

//nested if
foreach($mahasiswa as $m) {
    for($i=0; $i < count($m); $i++){
        echo $m[$i];
        // ngasi spacebar doang
        echo " ";
    }
    echo "<br>";
}
?>