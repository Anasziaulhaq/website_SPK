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
            // Atlanta
            $a2c11 = 1;
            $a2c12 = 1 / 6;
            $a2c13 = 1 / 4;
            // Birmingham
            $a2c21 = 6;
            $a2c22 = 1;
            $a2c23 = 3;
            // Charlotte
            $a2c31 = 4;
            $a2c32 = 1 / 3;
            $a2c33 = 1;
            ?>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Alternatif Pendapatan</h2>
                        <table class="table">
                            <table class="table table-striped">
                                <tr class="danger">
                                    <th>pendapatan</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                </tr>
                                <tr class="danger">
                                    <th>Atlanta</th>
                                    <th><?php echo $a2c11 ?></th>
                                    <th><?php echo $a2c12 ?></th>
                                    <th><?php echo $a2c13 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>Birmingham</th>
                                    <th><?php echo $a2c21 ?></th>
                                    <th><?php echo $a2c22 ?></th>
                                    <th><?php echo $a2c23 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>Charlotte</th>
                                    <th><?php echo $a2c31 ?></th>
                                    <th><?php echo $a2c32 ?></th>
                                    <th><?php echo $a2c33 ?></th>
                                </tr>
                                <!-- jumlah alternatif pendapatan -->
                                <?php
                                $ja2k1 = $a2c11 + $a2c21 + $a2c31;
                                $ja2k2 = $a2c12 + $a2c22 + $a2c32;
                                $ja2k3 = $a2c13 + $a2c23 + $a2c33;
                                ?>
                                <tr class="danger">
                                    <th>Jumlah</th>
                                    <th><?php echo $ja2k1 ?></th>
                                    <th><?php echo $ja2k2 ?></th>
                                    <th><?php echo $ja2k3 ?></th>
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
                            // Atlanta pendapatan
                            $na2c11 = $a2c11 / $ja2k1;
                            $na2c12 = $a2c12 / $ja2k2;
                            $na2c13 = $a2c13 / $ja2k3;
                            // Birmingham pendapatan
                            $na2c21 = $a2c21 / $ja2k1;
                            $na2c22 = $a2c22 / $ja2k2;
                            $na2c23 = $a2c23 / $ja2k3;
                            // Charlotte pendapatan
                            $na2c31 = $a2c31 / $ja2k1;
                            $na2c32 = $a2c32 / $ja2k2;
                            $na2c33 = $a2c33 / $ja2k3;
                            // jumlah hasil normalisasi
                            $ja2n1 = $na2c11 + $na2c12 + $na2c13;
                            $ja2n2 = $na2c21 + $na2c22 + $na2c23;
                            $ja2n3 = $na2c31 + $na2c32 + $na2c33;
                            // perhitungan PW
                            $pwa2c1 = $ja2n1 / 3;
                            $pwa2c2 = $ja2n2 / 3;
                            $pwa2c3 = $ja2n3 / 3;
                            ?>
                            <table class="table table-striped">
                                <tr class="danger">
                                    <th>pendapatan</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                    <th>jumlah</th>
                                    <th>PW</th>
                                </tr>
                                <tr class="danger">
                                    <th>Atlanta</th>
                                    <th><?php echo $na2c11 ?></th>
                                    <th><?php echo $na2c12 ?></th>
                                    <th><?php echo $na2c13 ?></th>
                                    <th><?php echo $ja2n1 ?></th>
                                    <th><?php echo $pwa2c1 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>Birmingham</th>
                                    <th><?php echo $na2c21 ?></th>
                                    <th><?php echo $na2c22 ?></th>
                                    <th><?php echo $na2c23 ?></th>
                                    <th><?php echo $ja2n2 ?></th>
                                    <th><?php echo $pwa2c2 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>Charlotte</th>
                                    <th><?php echo $na2c31 ?></th>
                                    <th><?php echo $na2c32 ?></th>
                                    <th><?php echo $na2c33 ?></th>
                                    <th><?php echo $ja2n3 ?></th>
                                    <th><?php echo $pwa2c3 ?></th>
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
                            $ma2c1 = ($a2c11 * $pwa2c1) + ($a2c12 * $pwa2c2) + ($a2c13 * $pwa2c3);
                            $ma2c2 = ($a2c21 * $pwa2c1) + ($a2c22 * $pwa2c2) + ($a2c23 * $pwa2c3);
                            $ma2c3 = ($a2c31 * $pwa2c1) + ($a2c32 * $pwa2c2) + ($a2c33 * $pwa2c3);
                            // perhitungan matriks dibagi PW
                            $mca2w1 = $ma2c1 / $pwa2c1;
                            $mca2w2 = $ma2c2 / $pwa2c2;
                            $mca2w3 = $ma2c3 / $pwa2c3;
                            ?>
                            <table class="table table-striped">
                                <tr class="danger">
                                    <th>Alternatif</th>
                                    <th>Matriks</th>
                                    <th>Matriks / PW</th>
                                </tr>
                                <tr class="danger">
                                    <th>Atlanta</th>
                                    <th><?php echo $ma2c1 ?></th>
                                    <th><?php echo $mca2w1 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>Birmingham</th>
                                    <th><?php echo $ma2c2 ?></th>
                                    <th><?php echo $mca2w2 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>Charlotte</th>
                                    <th><?php echo $ma2c3 ?></th>
                                    <th><?php echo $mca2w3 ?></th>
                                </tr>
                            </table>
                </div>
            </div>
    </center>
    <center>
        <div class="container mt-4">
            <div class="container">
                <div class="well well-sm">
                    <h2>Menghitung λmaks dan CI</h2>
                    <table class="table">
                        <table class="table table-striped">
                            <?php
                            // menghitung λmaks
                            $cma2 = ($mca2w1 + $mca2w2 + $mca2w3) / 3;
                            $ccia2 = ($cma2 - 3) / (3 - 1);
                            $ccra2 = $ccia2 / 0.58;
                            ?>
                            <table class="table table-striped">
                                <tr class="danger">
                                    <th>Perhitungan</th>
                                    <th>Hasil</th>
                                </tr>
                                <tr class="danger">
                                    <th>λmaks</th>
                                    <th><?php echo $cma2 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>CI</th>
                                    <th><?php echo $ccia2 ?></th>
                                </tr>
                                <tr class="danger">
                                    <th>CR</th>
                                    <th><?php echo $ccra2 ?></th>
                                    <th><?php
                                        if ($ccra2 < 0.1) {
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

            <li><a href="3.php">Alternatif Infrastruktur</a></>
        </ul>
    </div>