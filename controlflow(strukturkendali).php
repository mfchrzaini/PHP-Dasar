<?php 
// pengulangan
// for
// while
// do

//  inisialisasi i = 0 dan melakukan perulangan jika i != 7. I++ digunakan untuk update nilai I di setiap perulangan
for ($i = 0; $i < 7; $i++) {
    echo "hello wolrd";
}


$i =0;
while ($i < 7) {
    echo "hello world";

$i++;
}


// perulangan menggunakan do maka sintaks akan tetap dijalan kan satu kali meskipun kondisi tidak terpenuhi karena pengecekan kondisi dilakukan di akhir
$i = 0;
do {
    echo "hello world";
    $i++;
}while( $i < 7);


// switch
switch($favcolor){
    case "red":
        echo "your fav color is red";
        break;
    case "blue":
        echo "your fav color is blue";
        break;
    case "green":
        echo "your fav color is green";
        break;
    default:
    echo "your fav color neither red, green nor blue";
}

?>
<!-- $x=$y++ (nilai dari y masuk kedalam x baru nilai y ditambah 1) -->
<!-- $x=++$y (nilai y ditambah satu lalu masuk kedalam x) -->

<html>
<!-- contoh penulisan for menggunakan templating style -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1; $i <= 5; $i++) : ?>
            <tr>
                <?php for($j=1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</html>