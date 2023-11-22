<?php
$mahasiswa =
[
    [
        "nama"=>"joni",
        "nim"=>"123456",
        "jurusan"=>"Sistem Informasi",
        "email"=>"budi@gmail.com"
    ],
    [
        "nama"=>"budi",
        "nim"=>"321654",
        "jurusan"=>"ilmu komputer",
        "email"=>"budi@gmail.com"
    ]
    ];
    
    ?>


<html lang="en">

    <head>
        <title>Document</title>
    </head>

    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php foreach ($mahasiswa as $mhs):?>
            <ul> 
                <li>
                    <img src="img/<?=$mhs["gambar"];?>">
            </li>
                <li>Nama :<?=$mhs["nama"];?></li>
                <li>Nim :<?=$mhs["nim"];?></li>
                <li>Jurusan :<?=$mhs["Jurusan"];?></li>
                <li>Email :<?=$mhs["email"];?></li>
            </ul>
            <?php endforeach;?>
    </body>
</html>