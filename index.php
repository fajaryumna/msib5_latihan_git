<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Latiha PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="containter" style="display:flex; justify-content:center;">
        <?php
        $nama = "Fajar Yumna Adani";
        $umur = 21;
        $jurusan = "Teknik Komputer";
        $universitas = "Universitas Diponegoro";
        $alamat = "Tembalang, Semarang";
        $asal = "Blora, Jawa Tengah";
        ?>
        <div class="card m-5" style="width: 22rem;">
            <div class="card-body">
                <h3 class="card-title">Biodata Diri</h5>
                    <p class="card-title">Nama : <?php echo $nama; ?></p>
                    <p class="card-text">Umur : <?php echo $umur; ?> tahun</p>
                    <p class="card-text">Jurusan : <?php echo $jurusan; ?></p>
                    <p class="card-text">Universitas : <?php echo $universitas; ?></p>
                    <p class="card-text">Alamat : <?php echo $alamat; ?></p>
                    <p class="card-text">Asal : <?php echo $asal; ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>