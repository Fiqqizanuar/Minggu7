<?php
$mahasiswa = [
    ["Fiqqi", "22520022", "Teknik Informasi", "fiqqi@stimata.ac.id"],
    ["Zanuar", "22520022", "Teknik Informasi", "zanuar@stimata.ac.id"],
    ["Prakoso", "22520022", "Teknik Informasi", "prakoso@stimata.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach ($mhs as $m) : ?>
                <li><?= $m ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>

</html>