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
            $a3c11 = 1;
            $a3c12 = 1 / 3;
            $a3c13 = 5;
            // Birmingham
            $a3c21 = 3;
            $a3c22 = 1;
            $a3c23 = 6;
            // Charlotte
            $a3c31 = 1 / 5;
            $a3c32 = 1 / 6;
            $a3c33 = 1;
            ?>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Alternatif Infrastruktur</h2>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                    <th>infrastruktur</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <th><?php echo $a3c11 ?></th>
                                    <th><?php echo $a3c12 ?></th>
                                    <th><?php echo $a3c13 ?></th>
                                </tr>
                                <tr>
                                    <th>Birmingham</th>
                                    <th><?php echo $a3c21 ?></th>
                                    <th><?php echo $a3c22 ?></th>
                                    <th><?php echo $a3c23 ?></th>
                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <th><?php echo $a3c31 ?></th>
                                    <th><?php echo $a3c32 ?></th>
                                    <th><?php echo $a3c33 ?></th>
                                </tr>
                                <!-- jumlah alternatif infrastruktur -->
                                <?php
                                $ja3k1 = $a3c11 + $a3c21 + $a3c31;
                                $ja3k2 = $a3c12 + $a3c22 + $a3c32;
                                $ja3k3 = $a3c13 + $a3c23 + $a3c33;
                                ?>
                                <tr>
                                    <th>Jumlah</th>
                                    <th><?php echo $ja3k1 ?></th>
                                    <th><?php echo $ja3k2 ?></th>
                                    <th><?php echo $ja3k3 ?></th>
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
                            // Atlanta infrastruktur
                            $na3c11 = $a3c11 / $ja3k1;
                            $na3c12 = $a3c12 / $ja3k2;
                            $na3c13 = $a3c13 / $ja3k3;
                            // Birmingham infrastruktur
                            $na3c21 = $a3c21 / $ja3k1;
                            $na3c22 = $a3c22 / $ja3k2;
                            $na3c23 = $a3c23 / $ja3k3;
                            // Charlotte infrastruktur
                            $na3c31 = $a3c31 / $ja3k1;
                            $na3c32 = $a3c32 / $ja3k2;
                            $na3c33 = $a3c33 / $ja3k3;
                            // jumlah hasil normalisasi
                            $ja3n1 = $na3c11 + $na3c12 + $na3c13;
                            $ja3n2 = $na3c21 + $na3c22 + $na3c23;
                            $ja3n3 = $na3c31 + $na3c32 + $na3c33;
                            // perhitungan PW
                            $pwa3c1 = $ja3n1 / 3;
                            $pwa3c2 = $ja3n2 / 3;
                            $pwa3c3 = $ja3n3 / 3;
                            ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>infrastruktur</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                    <th>jumlah</th>
                                    <th>PW</th>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <th><?php echo $na3c11 ?></th>
                                    <th><?php echo $na3c12 ?></th>
                                    <th><?php echo $na3c13 ?></th>
                                    <th><?php echo $ja3n1 ?></th>
                                    <th><?php echo $pwa3c1 ?></th>
                                </tr>
                                <tr>
                                    <th>Birmingham</th>
                                    <th><?php echo $na3c21 ?></th>
                                    <th><?php echo $na3c22 ?></th>
                                    <th><?php echo $na3c23 ?></th>
                                    <th><?php echo $ja3n2 ?></th>
                                    <th><?php echo $pwa3c2 ?></th>
                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <th><?php echo $na3c31 ?></th>
                                    <th><?php echo $na3c32 ?></th>
                                    <th><?php echo $na3c33 ?></th>
                                    <th><?php echo $ja3n3 ?></th>
                                    <th><?php echo $pwa3c3 ?></th>
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
                            $ma3c1 = ($a3c11 * $pwa3c1) + ($a3c12 * $pwa3c2) + ($a3c13 * $pwa3c3);
                            $ma3c2 = ($a3c21 * $pwa3c1) + ($a3c22 * $pwa3c2) + ($a3c23 * $pwa3c3);
                            $ma3c3 = ($a3c31 * $pwa3c1) + ($a3c32 * $pwa3c2) + ($a3c33 * $pwa3c3);
                            // perhitungan matriks dibagi PW
                            $mca3w1 = $ma3c1 / $pwa3c1;
                            $mca3w2 = $ma3c2 / $pwa3c2;
                            $mca3w3 = $ma3c3 / $pwa3c3;
                            ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>Alternatif</th>
                                    <th>Matriks</th>
                                    <th>Matriks / PW</th>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <th><?php echo $ma3c1 ?></th>
                                    <th><?php echo $mca3w1 ?></th>
                                </tr>
                                <tr>
                                    <th>Birmingham</th>
                                    <th><?php echo $ma3c2 ?></th>
                                    <th><?php echo $mca3w2 ?></th>
                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <th><?php echo $ma3c3 ?></th>
                                    <th><?php echo $mca3w3 ?></th>
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
                            $cma3 = ($mca3w1 + $mca3w2 + $mca3w3) / 3;
                            $ccia3 = ($cma3 - 3) / (3 - 1);
                            $ccra3 = $ccia3 / 0.58;
                            ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>Perhitungan</th>
                                    <th>Hasil</th>
                                </tr>
                                <tr>
                                    <th>λmaks</th>
                                    <th><?php echo $cma3 ?></th>
                                </tr>
                                <tr>
                                    <th>CI</th>
                                    <th><?php echo $ccia3 ?></th>
                                </tr>
                                <tr>
                                    <th>CR</th>
                                    <th><?php echo $ccra3 ?></th>
                                    <th><?php
                                        if ($ccra3 < 0.1) {
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

            <li><a href="4.php">Alternatif Transportasi</a></li>
        </ul>
    </div>