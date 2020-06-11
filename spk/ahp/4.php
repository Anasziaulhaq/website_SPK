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
            $a4c11 = 1;
            $a4c12 = 1 / 2;
            $a4c13 = 1 / 7;
            // Birmingham
            $a4c21 = 2;
            $a4c22 = 1;
            $a4c23 = 1 / 2;
            // Charlotte
            $a4c31 = 7;
            $a4c32 = 2;
            $a4c33 = 1;
            ?>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Alternatif Transportasi</h2>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                    <th>transportasi</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <th><?php echo $a4c11 ?></th>
                                    <th><?php echo $a4c12 ?></th>
                                    <th><?php echo $a4c13 ?></th>
                                </tr>
                                <tr>
                                    <th>Birmingham</th>
                                    <th><?php echo $a4c21 ?></th>
                                    <th><?php echo $a4c22 ?></th>
                                    <th><?php echo $a4c23 ?></th>
                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <th><?php echo $a4c31 ?></th>
                                    <th><?php echo $a4c32 ?></th>
                                    <th><?php echo $a4c33 ?></th>
                                </tr>
                                <!-- jumlah alternatif infrastruktur -->
                                <?php
                                $ja4k1 = $a4c11 + $a4c21 + $a4c31;
                                $ja4k2 = $a4c12 + $a4c22 + $a4c32;
                                $ja4k3 = $a4c13 + $a4c23 + $a4c33;
                                ?>
                                <tr>
                                    <th>Jumlah</th>
                                    <th><?php echo $ja4k1 ?></th>
                                    <th><?php echo $ja4k2 ?></th>
                                    <th><?php echo $ja4k3 ?></th>
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
                            // Atlanta transportasi
                            $na4c11 = $a4c11 / $ja4k1;
                            $na4c12 = $a4c12 / $ja4k2;
                            $na4c13 = $a4c13 / $ja4k3;
                            // Birmingham transportasi
                            $na4c21 = $a4c21 / $ja4k1;
                            $na4c22 = $a4c22 / $ja4k2;
                            $na4c23 = $a4c23 / $ja4k3;
                            // Charlotte transportasi
                            $na4c31 = $a4c31 / $ja4k1;
                            $na4c32 = $a4c32 / $ja4k2;
                            $na4c33 = $a4c33 / $ja4k3;
                            // jumlah hasil normalisasi
                            $ja4n1 = $na4c11 + $na4c12 + $na4c13;
                            $ja4n2 = $na4c21 + $na4c22 + $na4c23;
                            $ja4n3 = $na4c31 + $na4c32 + $na4c33;
                            // perhitungan PW
                            $pwa4c1 = $ja4n1 / 3;
                            $pwa4c2 = $ja4n2 / 3;
                            $pwa4c3 = $ja4n3 / 3;
                            ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>trasnportasi</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                    <th>jumlah</th>
                                    <th>PW</th>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <th><?php echo $na4c11 ?></th>
                                    <th><?php echo $na4c12 ?></th>
                                    <th><?php echo $na4c13 ?></th>
                                    <th><?php echo $ja4n1 ?></th>
                                    <th><?php echo $pwa4c1 ?></th>
                                </tr>
                                <tr>
                                    <th>Birmingham</th>
                                    <th><?php echo $na4c21 ?></th>
                                    <th><?php echo $na4c22 ?></th>
                                    <th><?php echo $na4c23 ?></th>
                                    <th><?php echo $ja4n2 ?></th>
                                    <th><?php echo $pwa4c2 ?></th>
                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <th><?php echo $na4c31 ?></th>
                                    <th><?php echo $na4c32 ?></th>
                                    <th><?php echo $na4c33 ?></th>
                                    <th><?php echo $ja4n3 ?></th>
                                    <th><?php echo $pwa4c3 ?></th>
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
                            $ma4c1 = ($a4c11 * $pwa4c1) + ($a4c12 * $pwa4c2) + ($a4c13 * $pwa4c3);
                            $ma4c2 = ($a4c21 * $pwa4c1) + ($a4c22 * $pwa4c2) + ($a4c23 * $pwa4c3);
                            $ma4c3 = ($a4c31 * $pwa4c1) + ($a4c32 * $pwa4c2) + ($a4c33 * $pwa4c3);
                            // perhitungan matriks dibagi PW
                            $mca4w1 = $ma4c1 / $pwa4c1;
                            $mca4w2 = $ma4c2 / $pwa4c2;
                            $mca4w3 = $ma4c3 / $pwa4c3;
                            ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>Alternatif</th>
                                    <th>Matriks</th>
                                    <th>Matriks / PW</th>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <th><?php echo $ma4c1 ?></th>
                                    <th><?php echo $mca4w1 ?></th>
                                </tr>
                                <tr>
                                    <th>Birmingham</th>
                                    <th><?php echo $ma4c2 ?></th>
                                    <th><?php echo $mca4w2 ?></th>
                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <th><?php echo $ma4c3 ?></th>
                                    <th><?php echo $mca4w3 ?></th>
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
                            $cma4 = ($mca4w1 + $mca4w2 + $mca4w3) / 3;
                            $ccia4 = ($cma4 - 3) / (3 - 1);
                            $ccra4 = $ccia4 / 0.58;
                            ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>Perhitungan</th>
                                    <th>Hasil</th>
                                </tr>
                                <tr>
                                    <th>λmaks</th>
                                    <th><?php echo $cma4 ?></th>
                                </tr>
                                <tr>
                                    <th>CI</th>
                                    <th><?php echo $ccia4 ?></th>
                                </tr>
                                <tr>
                                    <th>CR</th>
                                    <th><?php echo $ccra4 ?></th>
                                    <th><?php
                                        if ($ccra4 < 0.1) {
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
    <center>
        <div class="container mt-4">
            <div class="container">
                <div class="well well-sm">
                    <h2>Pengambilan Keputusan</h2>
                    <table class="table">
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>pasar</th>
                                <th>pendapatan</th>
                                <th>infrastruktur</th>
                                <th>transportasi</th>
                                <th>hasil</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>PW</th>
                                    <td>0.25609796550199</td>
                                    <td>0.0.51388213180009</td>
                                    <td>0.0.13251326846528</td>
                                    <td>0.0.09750663423264</td>
                                </tr>
                                <tr>
                                    <th>Atlanta</th>
                                    <td>0.71507381507381</td>
                                    <td>0.086947910477322</td>
                                    <td>0.29232804232804</td>
                                    <td>0.10993788819876</td>
                                    <td>0.27726694462165</td>
                                </tr>
                                <tr>
                                    <th>Bringmiham</th>
                                    <td>0.18710178710179</td>
                                    <td>0.63933452168746</td>
                                    <td>0.62698412698413</td>
                                    <td>0.26335403726708</td>
                                    <td>0.48522145568471</td>

                                </tr>
                                <tr>
                                    <th>Charlotte</th>
                                    <td>0.097824397824398</td>
                                    <td>0.27371756783521</td>
                                    <td>0.080687830687831</td>
                                    <td>0.62670807453416</td>
                                    <td>0.23751159969364</td>
                                </tr>
                        </table>
                        <h3> <i>
                                Hasil CR: 0.48522145568471
                                <tr>
                                    Pilihan yang terpilih adalah Alternatif 2 yaitu Birmingham
                            </i> </h3>
                </div>
            </div>
    </center>
    <div class="container">
        <ul class="pager">
            <li><a href="/spk/electre.php">Next</a></li>
        </ul>
    </div>