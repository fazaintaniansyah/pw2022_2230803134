<?php
$mahasiswa = ["joni","123456","Sistem Informasi","minjaee@gmail.com"];
?>

<!DOCTYPE html >
<html lang="en">
    <head>
        <title>Documen</title>
    </head>

    <body>
        <h1>Daftar Mahasiswa </h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) :?>
                <li><?=$mhs;?></li>
                <?php endforeach;?>
</ul>

    </body>
</html>