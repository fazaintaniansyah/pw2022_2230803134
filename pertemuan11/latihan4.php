<?php
$mahasiswa = [
    ["joni","123456","Sistem Informasi","minjaee@gmail.com"],
    ["Budi","65413","Teknik Informasi","budi@gmail.com"],
    ["Angga","789654","Ilmu Komputer","angga@gmail.com"],
    ["896565","Rio","Teknik Jaringan","rio@gmail.com"]
];
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
                <li><?=$mhs[0];?></li>
                <li><?=$mhs[1];?></li>
                <li><?=$mhs[2];?></li>
                <li><?=$mhs[3];?></li>
                
</ul>
<?php endforeach;?>
    </body>
</html>