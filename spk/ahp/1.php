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
            $a1c11 = 1;
            $a1c12 = 4;
            $a1c13 = 7;
            // Birmingham
            $a1c21 = 1 / 4;
            $a1c22 = 1;
            $a1c23 = 2;
            // Charlotte
            $a1c31 = 1 / 7;
            $a1c32 = 1 / 2;
            $a1c33 = 1;
            ?>

            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Alternatif Pasar</h2>
                        <table class="table">
                            <table class="table table-striped">
                                <tr class="warning">
                                    <th>pasar</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                </tr>
                                <tr class="warning">
                                    <th>Atlanta</th>
                                    <th><?php echo $a1c11 ?></th>
                                    <th><?php echo $a1c12 ?></th>
                                    <th><?php echo $a1c13 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>Birmingham</th>
                                    <th><?php echo $a1c21 ?></th>
                                    <th><?php echo $a1c22 ?></th>
                                    <th><?php echo $a1c23 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>Charlotte</th>
                                    <th><?php echo $a1c31 ?></th>
                                    <th><?php echo $a1c32 ?></th>
                                    <th><?php echo $a1c33 ?></th>
                                </tr>
                                <!-- jumlah alternatif pasar -->
                                <?php
                                $ja1k1 = $a1c11 + $a1c21 + $a1c31;
                                $ja1k2 = $a1c12 + $a1c22 + $a1c32;
                                $ja1k3 = $a1c13 + $a1c23 + $a1c33;
                                ?>
                                <tr class="warning">
                                    <th>Jumlah</th>
                                    <th><?php echo $ja1k1 ?></th>
                                    <th><?php echo $ja1k2 ?></th>
                                    <th><?php echo $ja1k3 ?></th>
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
                            // Atlanta pasar
                            $na1c11 = $a1c11 / $ja1k1;
                            $na1c12 = $a1c12 / $ja1k2;
                            $na1c13 = $a1c13 / $ja1k3;
                            // Birmingham pasar
                            $na1c21 = $a1c21 / $ja1k1;
                            $na1c22 = $a1c22 / $ja1k2;
                            $na1c23 = $a1c23 / $ja1k3;
                            // Charlotte pasar
                            $na1c31 = $a1c31 / $ja1k1;
                            $na1c32 = $a1c32 / $ja1k2;
                            $na1c33 = $a1c33 / $ja1k3;
                            // jumlah hasil normalisasi
                            $ja1n1 = $na1c11 + $na1c12 + $na1c13;
                            $ja1n2 = $na1c21 + $na1c22 + $na1c23;
                            $ja1n3 = $na1c31 + $na1c32 + $na1c33;
                            // perhitungan PW
                            $pwa1c1 = $ja1n1 / 3;
                            $pwa1c2 = $ja1n2 / 3;
                            $pwa1c3 = $ja1n3 / 3;
                            ?>
                            <table class="table table-striped">
                                <tr class="warning">
                                    <th>pasar</th>
                                    <th>Atlanta</th>
                                    <th>Birmingham</th>
                                    <th>Charlotte</th>
                                    <th>jumlah</th>
                                    <th>PW</th>
                                </tr>
                                <tr class="warning">
                                    <th>Atlanta</th>
                                    <th><?php echo $na1c11 ?></th>
                                    <th><?php echo $na1c12 ?></th>
                                    <th><?php echo $na1c13 ?></th>
                                    <th><?php echo $ja1n1 ?></th>
                                    <th><?php echo $pwa1c1 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>Birmingham</th>
                                    <th><?php echo $na1c21 ?></th>
                                    <th><?php echo $na1c22 ?></th>
                                    <th><?php echo $na1c23 ?></th>
                                    <th><?php echo $ja1n2 ?></th>
                                    <th><?php echo $pwa1c2 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>Charlotte</th>
                                    <th><?php echo $na1c31 ?></th>
                                    <th><?php echo $na1c32 ?></th>
                                    <th><?php echo $na1c33 ?></th>
                                    <th><?php echo $ja1n3 ?></th>
                                    <th><?php echo $pwa1c3 ?></th>
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
                            $ma1c1 = ($a1c11 * $pwa1c1) + ($a1c12 * $pwa1c2) + ($a1c13 * $pwa1c3);
                            $ma1c2 = ($a1c21 * $pwa1c1) + ($a1c22 * $pwa1c2) + ($a1c23 * $pwa1c3);
                            $ma1c3 = ($a1c31 * $pwa1c1) + ($a1c32 * $pwa1c2) + ($a1c33 * $pwa1c3);
                            // perhitungan matriks dibagi PW
                            $mca1w1 = $ma1c1 / $pwa1c1;
                            $mca1w2 = $ma1c2 / $pwa1c2;
                            $mca1w3 = $ma1c3 / $pwa1c3;
                            ?>
                            <table class="table table-striped">
                                <tr class="warning">
                                    <th>Alternatif</th>
                                    <th>Matriks</th>
                                    <th>Matriks / PW</th>
                                </tr>
                                <tr class="warning">
                                    <th>Atlanta</th>
                                    <th><?php echo $ma1c1 ?></th>
                                    <th><?php echo $mca1w1 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>Birmingham</th>
                                    <th><?php echo $ma1c2 ?></th>
                                    <th><?php echo $mca1w2 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>Charlotte</th>
                                    <th><?php echo $ma1c3 ?></th>
                                    <th><?php echo $mca1w3 ?></th>
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
                            $cma1 = ($mca1w1 + $mca1w2 + $mca1w3) / 3;
                            $ccia1 = ($cma1 - 3) / (3 - 1);
                            $ccra1 = $ccia1 / 0.58;
                            ?>
                            <table class="table table-striped">
                                <tr class="warning">
                                    <th>Perhitungan</th>
                                    <th>Hasil</th>
                                </tr>
                                <tr class="warning">
                                    <th>λmaks</th>
                                    <th><?php echo $cma1 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>CI</th>
                                    <th><?php echo $ccia1 ?></th>
                                </tr>
                                <tr class="warning">
                                    <th>CR</th>
                                    <th><?php echo $ccra1 ?></th>
                                    <th><?php
                                        if ($ccra1 < 0.1) {
                                            echo ("Dapat Digunakan");
                                        } else {
                                            echo ("Tidak Dapat Digunakan");
                                        }
                                        ?></th>
                                </tr>
                            </table>
                        </table>
                </div>
            </div>
    </center>
    <div class="container">
        <ul class="pager">
            <li><a href="/spk/ahp.php">Previous</a></li>
            <li><a href="2.php">Alternatif Pendapatan</a></li>
        </ul>
    </div>

    </html>