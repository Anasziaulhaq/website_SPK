<head>
    <title>Tugas WEB SPK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- Kriteria -->

    <center>

<body>
    <div>
        <?php
        // Fasilitas Pendukung
        $c11 = 2;
        $c12 = 4;
        $c13 = 3;
        $c14 = 30;
        $string = "Benefit";
        // Harga Bangunan
        $c21 = 7000000;
        $c22 = 10000000;
        $c23 = 8500000;
        $c24 = 20;
        $string1 = "Cost";
        // Kontruksi Bangunan
        $c31 = 2012;
        $c32 = 2015;
        $c33 = 2010;
        $c34 = 20;
        $string = "Benefit";
        // Jarak Tempat Kerja
        $c41 = 7;
        $c42 = 2;
        $c43 = 4;
        $c44 = 20;
        $string1 = "Cost";
        // JSistem Keamanan Apartemen
        $c51 = 3;
        $c52 = 3;
        $c53 = 4;
        $c54 = 10;
        $string = "Benefit";
        ?>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Soal SAW & WP</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr class="success">
                                    <th></th>
                                    <th>Apartemen 1</th>
                                    <th>Apartemen 2</th>
                                    <th>Apartemen 3</th>
                                    <th>Bobot</th>
                                    <th>Jenis Atribut</th>
                                </tr>
                                <tr class="success">
                                    <th>Fasilitas Pendukung</th>
                                    <th><?php echo $c11 ?></th>
                                    <th><?php echo $c12 ?></th>
                                    <th><?php echo $c13 ?></th>
                                    <th><?php echo $c14 ?></th>
                                    <th><?php echo $string ?></th>
                                </tr>
                                <tr class="success">
                                    <th>Harga Bangunan</th>
                                    <th><?php echo $c21 ?></th>
                                    <th><?php echo $c22 ?></th>
                                    <th><?php echo $c23 ?></th>
                                    <th><?php echo $c24 ?></th>
                                    <th><?php echo $string1 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>Kontruksi Bangunan</th>
                                    <th><?php echo $c31 ?></th>
                                    <th><?php echo $c32 ?></th>
                                    <th><?php echo $c33 ?></th>
                                    <th><?php echo $c34 ?></th>
                                    <th><?php echo $string ?></th>
                                </tr>
                                <tr class="success">
                                    <th>Jarak Tempat Kerja</th>
                                    <th><?php echo $c41 ?></th>
                                    <th><?php echo $c42 ?></th>
                                    <th><?php echo $c43 ?></th>
                                    <th><?php echo $c44 ?></th>
                                    <th><?php echo $string1 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>Sistem Keamanan Apartemen</th>
                                    <th><?php echo $c51 ?></th>
                                    <th><?php echo $c52 ?></th>
                                    <th><?php echo $c53 ?></th>
                                    <th><?php echo $c54 ?></th>
                                    <th><?php echo $string ?></th>
                                </tr>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Normalisasi</h3>
                        <table class="table">
                            <?php
                            // perhitungan normalisasi
                            // Fasilitas Pendukung
                            $nc11 = $c11 / $c12;
                            $nc12 = $c12 / $c12;
                            $nc13 = $c13 / $c12;
                            $nc14 = $c14 / 100;

                            //Harga Bangunan 
                            $nc21 = $c21 / $c21;
                            $nc22 = $c21 / $c22;
                            $nc23 = $c21 / $c23;
                            $nc24 = $c24 / 100;
                            // Kontruksi Bangunan
                            $nc31 = $c31 / $c31;
                            $nc32 = $c32 / $c32;
                            $nc33 = $c33 / $c32;
                            $nc34 = $c34 / 100;
                            // Jarak Tempat Kerja
                            $nc41 = $c42 / $c41;
                            $nc42 = $c42 / $c42;
                            $nc43 = $c42 / $c43;
                            $nc44 = $c44 / 100;
                            //Sistem Keamanan Aparteme
                            $nc51 = $c51 / $c53;
                            $nc52 = $c52 / $c53;
                            $nc53 = $c53 / $c53;
                            $nc54 = $c54 / 100;
                            ?>
                            <table class="table table-striped">
                                <tr class="success">
                                    <th></th>
                                    <th>Apartemen 1</th>
                                    <th>Apartemen 2</th>
                                    <th>Apartemen 3</th>
                                    <th>Bobot</th>
                                    <th>Jenis Atribut</th>
                                </tr>
                                <tr class="success">
                                    <th>C1</th>
                                    <th><?php echo $nc11 ?></th>
                                    <th><?php echo $nc12 ?></th>
                                    <th><?php echo $nc13 ?></th>
                                    <th><?php echo $nc14 ?></th>
                                    <th><?php echo $string ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C2</th>
                                    <th><?php echo $nc21 ?></th>
                                    <th><?php echo $nc22 ?></th>
                                    <th><?php echo $nc23 ?></th>
                                    <th><?php echo $nc24 ?></th>
                                    <th><?php echo $string1 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C3</th>
                                    <th><?php echo $nc31 ?></th>
                                    <th><?php echo $nc32 ?></th>
                                    <th><?php echo $nc33 ?></th>
                                    <th><?php echo $nc34 ?></th>
                                    <th><?php echo $string ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C4</th>
                                    <th><?php echo $nc41 ?></th>
                                    <th><?php echo $nc42 ?></th>
                                    <th><?php echo $nc43 ?></th>
                                    <th><?php echo $nc44 ?></th>
                                    <th><?php echo $string1 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C5</th>
                                    <th><?php echo $nc51 ?></th>
                                    <th><?php echo $nc52 ?></th>
                                    <th><?php echo $nc53 ?></th>
                                    <th><?php echo $nc54 ?></th>
                                    <th><?php echo $string ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Perkalian Dengan Bobot</h3>
                        <?php
                        // Apartemen1
                        $pc1 = ($nc11 * $c14 / 100);
                        $pc2 = ($nc21 * $c24 / 100);
                        $pc3 = ($nc31 * $c34 / 100);
                        $pc4 = ($nc41 * $c44 / 100);
                        $pc5 = ($nc51 * $c54 / 100);
                        //Apartemen 2 
                        $p1 = ($nc12 * $c14 / 100);
                        $p2 = ($nc22 * $c24 / 100);
                        $p3 = ($nc32 * $c34 / 100);
                        $p4 = ($nc42 * $c44 / 100);
                        $p5 = ($nc52 * $c54 / 100);
                        //Apartemen 3
                        $p11 = ($nc13 * $c14 / 100);
                        $p22 = ($nc23 * $c24 / 100);
                        $p33 = ($nc33 * $c34 / 100);
                        $p44 = ($nc43 * $c44 / 100);
                        $p55 = ($nc53 * $c54 / 100);

                        ?>
                        <table class="table table-striped">
                            <tr class="success">
                                <th></th>
                                <th>Apartemen 1</th>
                                <th>Apartemen 2</th>
                                <th>Apartemen 3</th>

                            </tr>
                            <tr class="success">
                                <th>C1</th>
                                <th><?php echo $pc1 ?></th>
                                <th><?php echo $p1 ?></th>
                                <th><?php echo $p11 ?></th>

                            </tr>
                            <tr class="success">
                                <th>C2</th>
                                <th><?php echo $pc2 ?></th>
                                <th><?php echo $p2 ?></th>
                                <th><?php echo $p22 ?></th>

                            </tr>
                            <tr class="success">
                                <th>C3</th>
                                <th><?php echo $pc3 ?></th>
                                <th><?php echo $p3 ?></th>
                                <th><?php echo $p33 ?></th>

                            </tr>
                            <tr class="success">
                                <th>C4</th>
                                <th><?php echo $pc4 ?></th>
                                <th><?php echo $p4 ?></th>
                                <th><?php echo $p44 ?></th>

                            </tr>
                            <tr class="success">
                                <th>C5</th>
                                <th><?php echo $pc5 ?></th>
                                <th><?php echo $p5 ?></th>
                                <th><?php echo $p55 ?></th>

                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <center>

            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menghitung Nilai Alternatif SAW </h3>
                        <?php
                        // Apartemen1
                        $v1 = ($pc1 + $pc2 + $pc3 + $pc4 + $pc5);
                        $v2 = ($p1 + $p2 + $p3 + $p4 + $p5);
                        $v3 = ($p11 + $p22 + $p33 + $p44 + $p55);
                        ?>
                        <table class="table table-striped">

                            <tr class="success">
                                <th>v1</th>
                                <th><?php echo $v1 ?></th>
                            </tr>
                            <tr class="success">
                                <th>v2</th>
                                <th><?php echo $v2 ?></th>

                            </tr>
                            <tr class="success">
                                <th>v3</th>
                                <th><?php echo $v3 ?></th>
                            </tr>
                        </table>
                        <h3> <i>Pilihan yang terpilih adalah Alternatif 2 yaitu Apartemen 2</i> </h3>
                    </div>
                </div>
        </center>
        <center>

            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menghitung Nilai Alternatif WP</h3>
                        <?php
                        $S1 = pow($pc1, $c14 / 100) * pow($pc2, $c24 / 100) * pow($pc3, $c34 / 100) * pow($pc4, $c44 / 100) * pow($pc5, $c54 / 100);
                        $S2 = pow($p1, $c14 / 100) * pow($p2, $c24 / 100) * pow($p3, $c34 / 100) * pow($p4, $c44 / 100) * pow($p5, $c54 / 100);
                        $S3 = pow($p11, $c14 / 100) * pow($p22, $c24 / 100) * pow($p33, $c34 / 100) * pow($p44, $c44 / 100) * pow($p55, $c54 / 100);
                        ?>
                        <table class="table table-striped">

                            <tr class="success">
                                <th>S1</th>
                                <th><?php echo $S1 ?></th>
                            </tr>
                            <tr class="success">
                                <th>S2</th>
                                <th><?php echo $S2 ?></th>

                            </tr>
                            <tr class="success">
                                <th>S3</th>
                                <th><?php echo $S3 ?></th>
                            </tr>
                        </table>

                    </div>
                </div>
        </center>
        <center>

            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <?php
                        $V1 = $S1 / ($S1 + $S2 + $S3);
                        $V2 = $S2 / ($S1 + $S2 + $S3);
                        $V3 = $S3 / ($S1 + $S2 + $S3);
                        ?>
                        <table class="table table-striped">

                            <tr class="success">
                                <th>V1</th>
                                <th><?php echo $V1 ?></th>
                                </>
                            <tr class="success">
                                <th>V2</th>
                                <th><?php echo $V2 ?></th>
                            </tr>
                            <tr class="success">
                                <th>V3</th>
                                <th><?php echo $V3 ?></th>
                            </tr>
                        </table>
                        <center>
                            <h3> <i>Pilihan yang terpilih adalah Alternatif 2 yaitu Apartemen 2</i> </h3>
                            <div class="container">
                                <ul class="pager">
                                    <li><a href="index.php">Previous</a></li>
                                    <li><a href="ahp.php">Next</a></li>
                                </ul>
                            </div>
                        </center>
                    </div>
        </center>
    </div>
    </center>
    </head>
    </div>
</body>

</html>