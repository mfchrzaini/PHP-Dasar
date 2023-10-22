<?php 
// pembuatan array associative
$data = [
    "nama"=> "fachru",
    "alamat"=> "bandung",
    "nickname"=> "zain"
];

// menampilkan array menggunakan perulangan
foreach ($data as $key => $value) {
    echo $key .": ". $value."<br>";
};

?>