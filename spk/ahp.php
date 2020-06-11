<head>
    <title>Tugas WEB SPK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- Kriteria -->
    <center>
        <div>
            <?php
            // Kriteria pasar
            $c11 = 1;
            $c12 = 1 / 3;
            $c13 = 2;
            $c14 = 4;
            // Kriteria pendapatan
            $c21 = 3;
            $c22 = 1;
            $c23 = 5;
            $c24 = 3;
            // Kriteria infrastruktur
            $c31 = 1 / 2;
            $c32 = 1 / 5;
            $c33 = 1;
            $c34 = 2;
            // Kriteria transportasi
            $c41 = 1 / 4;
            $c42 = 1 / 3;
            $c43 = 1 / 2;
            $c44 = 1;
            ?>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Soal AHP</h2>
                        <table class="table">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="info">
                                        <th>Kriteria</th>
                                        <th>pasar</th>
                                        <th>pendapatan</th>
                                        <th>infrastruktur</th>
                                        <th>transportasi</th>
                                    </tr>
                                    <tr class="info">
                                        <th>pasar</th>
                                        <th><?php echo $c11 ?></th>
                                        <th><?php echo $c12 ?></th>
                                        <th><?php echo $c13 ?></th>
                                        <th><?php echo $c14 ?></th>
                                    </tr>
                                    <tr class="info">
                                        <th>pendapatan</th>
                                        <th><?php echo $c21 ?></th>
                                        <th><?php echo $c22 ?></th>
                                        <th><?php echo $c23 ?></th>
                                        <th><?php echo $c24 ?></th>
                                    </tr>
                                    <tr class="info">
                                        <th>infrastruktur</th>
                                        <th><?php echo $c31 ?></th>
                                        <th><?php echo $c32 ?></th>
                                        <th><?php echo $c33 ?></th>
                                        <th><?php echo $c34 ?></th>
                                    </tr>
                                    <tr class="info">
                                        <th>transportasi</th>
                                        <th><?php echo $c41 ?></th>
                                        <th><?php echo $c42 ?></th>
                                        <th><?php echo $c43 ?></th>
                                        <th><?php echo $c44 ?></th>
                                    </tr>
                                    <!-- jumlah kriteria -->
                                    <?php
                                    $jk1 = $c11 + $c21 + $c31 + $c41;
                                    $jk2 = $c12 + $c22 + $c32 + $c42;
                                    $jk3 = $c13 + $c23 + $c33 + $c43;
                                    $jk4 = $c14 + $c24 + $c34 + $c44;
                                    ?>
                                    <tr class="info">
                                        <th>Jumlah</th>
                                        <th><?php echo $jk1 ?></th>
                                        <th><?php echo $jk2 ?></th>
                                        <th><?php echo $jk3 ?></th>
                                        <th><?php echo $jk4 ?></th>
                                    </tr>
                            </table>
                    </div>
                </div>
    </center>
    <center>
        <div class="container mt-4">
            <div class="container">
                <div class="well well-sm">
                    <h2>Normalisasi</h2>
                    <table class="table">
                        <table class="table table-striped">

                            <?php
                            // perhitungan normalisasi
                            // Kriteria pasar
                            $nc11 = $c11 / $jk1;
                            $nc12 = $c12 / $jk2;
                            $nc13 = $c13 / $jk3;
                            $nc14 = $c14 / $jk4;
                            // Kriteria pendapatan
                            $nc21 = $c21 / $jk1;
                            $nc22 = $c22 / $jk2;
                            $nc23 = $c23 / $jk3;
                            $nc24 = $c24 / $jk4;
                            // Kriteria infrastruktur
                            $nc31 = $c31 / $jk1;
                            $nc32 = $c32 / $jk2;
                            $nc33 = $c33 / $jk3;
                            $nc34 = $c34 / $jk4;
                            // Kriteria transportasi
                            $nc41 = $c41 / $jk1;
                            $nc42 = $c42 / $jk2;
                            $nc43 = $c43 / $jk3;
                            $nc44 = $c44 / $jk4;
                            // jumlah hasil normalisasi
                            $jn1 = $nc11 + $nc12 + $nc13 + $nc14;
                            $jn2 = $nc21 + $nc22 + $nc23 + $nc24;
                            $jn3 = $nc31 + $nc32 + $nc33 + $nc34;
                            $jn4 = $nc41 + $nc42 + $nc43 + $nc44;
                            // perhitungan PW
                            $pwc1 = $jn1 / 4;
                            $pwc2 = $jn2 / 4;
                            $pwc3 = $jn3 / 4;
                            $pwc4 = $jn4 / 4;
                            ?>
                            <table class="table table-striped">
                                <tr class="info">
                                    <th>Kriteria</th>
                                    <th>pasar</th>
                                    <th>pendapatan</th>
                                    <th>infrastruktur</th>
                                    <th>transportasi</th>
                                    <th>jumlah</th>
                                    <th>PW</th>
                                </tr>
                                <tr class="info">
                                    <th>pasar</th>
                                    <th><?php echo $nc11 ?></th>
                                    <th><?php echo $nc12 ?></th>
                                    <th><?php echo $nc13 ?></th>
                                    <th><?php echo $nc14 ?></th>
                                    <th><?php echo $jn1 ?></th>
                                    <th><?php echo $pwc1 ?></th>
                                </tr>
                                <tr class="info">
                                    <th>pendapatan</th>
                                    <th><?php echo $nc21 ?></th>
                                    <th><?php echo $nc22 ?></th>
                                    <th><?php echo $nc23 ?></th>
                                    <th><?php echo $nc24 ?></th>
                                    <th><?php echo $jn2 ?></th>
                                    <th><?php echo $pwc2 ?></th>
                                </tr>
                                <tr class="info">
                                    <th>infrastruktur</th>
                                    <th><?php echo $nc31 ?></th>
                                    <th><?php echo $nc32 ?></th>
                                    <th><?php echo $nc33 ?></th>
                                    <th><?php echo $nc34 ?></th>
                                    <th><?php echo $jn3 ?></th>
                                    <th><?php echo $pwc3 ?></th>
                                </tr>
                                <tr class="info">
                                    <th>transportasi</th>
                                    <th><?php echo $nc41 ?></th>
                                    <th><?php echo $nc42 ?></th>
                                    <th><?php echo $nc43 ?></th>
                                    <th><?php echo $nc44 ?></th>
                                    <th><?php echo $jn4 ?></th>
                                    <th><?php echo $pwc4 ?></th>
                                </tr>
                            </table>
                </div>
            </div>
    </center>
    <center>
        <div class="container mt-4">
            <div class="container">
                <div class="well well-sm">
                    <h2>Menghitung CR</h2>
                    <h2>Menghitung Matriks</h2>
                    <table class="table">
                        <table class="table table-striped">

                            <?php
                            // perhitungan matriks
                            $mc1 = ($c11 * $pwc1) + ($c12 * $pwc2) + ($c13 * $pwc3) + ($c14 * $pwc4);
                            $mc2 = ($c21 * $pwc1) + ($c22 * $pwc2) + ($c23 * $pwc3) + ($c24 * $pwc4);
                            $mc3 = ($c31 * $pwc1) + ($c32 * $pwc2) + ($c33 * $pwc3) + ($c34 * $pwc4);
                            $mc4 = ($c41 * $pwc1) + ($c42 * $pwc2) + ($c43 * $pwc3) + ($c44 * $pwc4);
                            // perhitungan matriks dibagi PW
                            $mcw1 = $mc1 / $pwc1;
                            $mcw2 = $mc2 / $pwc2;
                            $mcw3 = $mc3 / $pwc3;
                            $mcw4 = $mc4 / $pwc4;
                            ?>
                            <table class="table table-striped">
                                <tr class="info">
                                    <th>Kriteria</th>
                                    <th>Matriks</th>
                                    <th>Matriks / PW</th>
                                </tr>
                                <tr class="info">
                                    <th>pasar</th>
                                    <th><?php echo $mc1 ?></th>
                                    <th><?php echo $mcw1 ?></th>
                                </tr>
                                <tr class="info">
                                    <th>pendapatan</th>
                                    <th><?php echo $mc2 ?></th>
                                    <th><?php echo $mcw2 ?></th>
                                </tr>
                                <tr class="info">
                                    <th>infrastruktur</th>
                                    <th><?php echo $mc3 ?></th>
                                    <th><?php echo $mcw3 ?></th>
                                </tr>
                                <tr class="info">
                                    <th>transportasi</th>
                                    <th><?php echo $mc4 ?></th>
                                    <th><?php echo $mcw4 ?></th>
                                </tr>
                            </table>
                </div>
            </div>
    </center>
    <center>
        <div class="container mt-4">
            <div class="container">
                <div class="well well-sm">
                    <h2>Menhitung λmaks dan CI</h2>
                    <table class="table">
                        <table class="table table-striped">
                            <?php
                            // menghitung λmaks
                            $cm = ($mcw1 + $mcw2 + $mcw3 + $mcw4) / 4;
                            $cci = ($cm - 4) / (4 - 1);
                            $ccr = $cci / 0.9;
                            ?>
                            <table class="table table-striped">
                                <tr class="info">
                                    <th>Perhitungan</th>
                                    <th>Hasil</th>
                                </tr>
                                <tr class="info">
                                    <th>λmaks</th>
                                    <th><?php echo $cm ?></th>
                                </tr>
                                <tr class="info">
                                    <th>CI</th>
                                    <th><?php echo $cci ?></th>
                                </tr>
                                <tr class="info">
                                    <th>CR</th>
                                    <th><?php echo $ccr ?></th>
                                    <th><?php
                                        if ($ccr < 0.1) {
                                            echo ("Dapat Digunakan");
                                        } else {
                                            echo ("Tidak Dapat Digunakan");
                                        }
                                        ?></th>
                                </tr>
                            </table>
                </div>
            </div>
    </center>
    <div class="container">
        <ul class="pager">
            <li><a href="index.php">Previous</a></li>
            <ul class="pagination">
                <center>
                    <li><a href="ahp/1.php">Alternatif Pasar</a></li>
                </center>
            </ul>
        </ul>
    </div>
</head>