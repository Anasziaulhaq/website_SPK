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

        $sk = 1;
        $sk2 = 2;
        $sk3 = 3;
        $sk4 = 4;

        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Soal Electre</h3>
                        <table class="table">
                            <table class="table table-striped">


                                <tr class="success">
                                    <th>Fasilitas</th>
                                    <th>Skor</th>


                                </tr>
                                <tr class="success">
                                    <th>Kurang</th>
                                    <th><?php echo $sk ?></th>


                                </tr>
                                <tr class="success">
                                    <th>Sedang</th>
                                    <th><?php echo $sk2 ?></th>

                                </tr>
                                <tr class="success">
                                    <th>Baik</th>
                                    <th><?php echo $sk3 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>Baik Sekali</th>
                                    <th><?php echo $sk4 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>

        <?php

        $bb0 = 3;
        $bb1 = 2;
        $bb2 = 2;
        $bb3 = 2;
        $bb4 = 1;

        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <th></th>
                        <table class="table table-striped">
                            <tr class="success">
                                <th>Bobot</th>
                                <th>Skor</th>
                            </tr>
                            <tr class="success">
                                <th>C1</th>
                                <th><?php echo $bb0 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C2</th>
                                <th><?php echo $bb1 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C3</th>
                                <th><?php echo $bb2 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C4</th>
                                <th><?php echo $bb3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C5</th>
                                <th><?php echo $bb4 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </center>

        <?php

        $sk = 5;
        $sk2 = 4;
        $sk3 = 3;
        $sk4 = 2;
        $sk5 = 1;
        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <th></th>
                        <table class="table table-striped">
                            <tr class="success">
                                <th>Kondisi Harga</th>
                                <th>Skor</th>
                            </tr>
                            <tr class="success">
                                <th>5jt-6jt</th>
                                <th><?php echo $sk ?></th>
                            </tr>
                            <tr class="success">
                                <th>6.1jt-7jt</th>
                                <th><?php echo $sk2 ?></th>
                            </tr>
                            <tr class="success">
                                <th>7.1jt-8jt</th>
                                <th><?php echo $sk3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>8.1jt-9jt</th>
                                <th><?php echo $sk4 ?></th>
                            </tr>
                            <tr class="success">
                                <th>>9jt</th>
                                <th><?php echo $sk5 ?></th>
                            </tr>

                        </table>
                    </div>
                </div>
        </center>
        <?php

        $sk = 5;
        $sk2 = 4;
        $sk3 = 3;
        $sk4 = 2;
        $sk5 = 1;


        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <th></th>
                        <table class="table table-striped">

                            <tr class="success">
                                <th>Tahun Bangunan</th>
                                <th>Skor</th>
                            </tr>
                            <tr class="success">
                                <th>2015</th>
                                <th><?php echo $sk ?></th>
                            </tr>
                            <tr class="success">
                                <th>2014</th>
                                <th><?php echo $sk2 ?></th>
                            </tr>
                            <tr class="success">
                                <th>2013</th>
                                <th><?php echo $sk3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>2012</th>
                                <th><?php echo $sk4 ?></th>
                            </tr>
                            <tr class="success">
                                <th>>2011</th>
                                <th><?php echo $sk5 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>


        <?php

        $sk = 5;
        $sk2 = 4;
        $sk3 = 3;
        $sk4 = 2;
        $sk5 = 1;


        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <th></th>
                        <table class="table table-striped">
                            <tr class="success">
                                <th>Jarak Ke Tempat</th>
                                <th>Skor</th>
                            </tr>
                            <tr class="success">
                                <th>
                                    <= 2 km</th> <th><?php echo $sk ?>
                                </th>


                            </tr>
                            <tr class="success">
                                <th>2.1 km-5 km</th>
                                <th><?php echo $sk2 ?></th>

                            </tr>
                            <tr class="success">
                                <th>5.1 - 7km</th>
                                <th><?php echo $sk3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>7.1-10km</th>
                                <th><?php echo $sk4 ?></th>
                            </tr>
                            <tr class="success">
                                <th>>10 km</th>
                                <th><?php echo $sk5 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php
        // perhitungan normalisasi

        $nc11 = 2;
        $nc12 = 4;
        $nc13 = 2;
        $nc14 = 3;
        $nc15 = 3;

        $nc21 = 4;
        $nc22 = 1;
        $nc23 = 5;
        $nc24 = 5;
        $nc25 = 3;

        $nc31 = 3;
        $nc32 = 2;
        $nc33 = 1;
        $nc34 = 4;
        $nc35 = 4;

        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Normalisasi</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th><?php echo $nc11 ?></th>
                                    <th><?php echo $nc12 ?></th>
                                    <th><?php echo $nc13 ?></th>
                                    <th><?php echo $nc14 ?></th>
                                    <th><?php echo $nc15 ?></th>
                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php echo $nc21 ?></th>
                                    <th><?php echo $nc22 ?></th>
                                    <th><?php echo $nc23 ?></th>
                                    <th><?php echo $nc24 ?></th>
                                    <th><?php echo $nc25 ?></th>
                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th><?php echo $nc31 ?></th>
                                    <th><?php echo $nc32 ?></th>
                                    <th><?php echo $nc33 ?></th>
                                    <th><?php echo $nc34 ?></th>
                                    <th><?php echo $nc35 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php
        // perhitungan normalisasi

        $mn = $nc11 / sqrt(pow($nc11, 2) + pow($nc21, 2) + pow($nc31, 2));
        $mn1 = $nc21 / sqrt(pow($nc11, 2) + pow($nc21, 2) + pow($nc31, 2));
        $mn2 = $nc31 / sqrt(pow($nc11, 2) + pow($nc21, 2) + pow($nc31, 2));

        $mn0 = $nc12 / sqrt(pow($nc12, 2) + pow($nc22, 2) + pow($nc32, 2));
        $mn11 = $nc22 / sqrt(pow($nc12, 2) + pow($nc22, 2) + pow($nc32, 2));
        $mn22 = $nc32 / sqrt(pow($nc12, 2) + pow($nc22, 2) + pow($nc32, 2));

        $mn00 =  $nc13 / sqrt(pow($nc13, 2) + pow($nc23, 2) + pow($nc33, 2));
        $mn111 = $nc23 / sqrt(pow($nc13, 2) + pow($nc23, 2) + pow($nc33, 2));
        $mn222 = $nc33 / sqrt(pow($nc13, 2) + pow($nc23, 2) + pow($nc33, 2));

        $mn000 =  $nc14 / sqrt(pow($nc14, 2) + pow($nc24, 2) + pow($nc34, 2));
        $mn1111 = $nc24 / sqrt(pow($nc14, 2) + pow($nc24, 2) + pow($nc34, 2));
        $mn2222 = $nc34 / sqrt(pow($nc14, 2) + pow($nc24, 2) + pow($nc34, 2));

        $mn0000 =  $nc15 / sqrt(pow($nc15, 2) + pow($nc25, 2) + pow($nc35, 2));
        $mn11111 = $nc25 / sqrt(pow($nc15, 2) + pow($nc25, 2) + pow($nc35, 2));
        $mn22222 = $nc35 / sqrt(pow($nc15, 2) + pow($nc25, 2) + pow($nc35, 2));

        ?>


        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Matrik Normalisasi</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>R</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th><?php echo $mn ?></th>
                                    <th><?php echo $mn0 ?></th>
                                    <th><?php echo $mn00 ?></th>
                                    <th><?php echo $mn000 ?></th>
                                    <th><?php echo $mn0000 ?></th>


                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php echo $mn1 ?></th>
                                    <th><?php echo $mn11 ?></th>
                                    <th><?php echo $mn111 ?></th>
                                    <th><?php echo $mn1111 ?></th>
                                    <th><?php echo $mn11111 ?></th>


                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th><?php echo $mn2 ?></th>
                                    <th><?php echo $mn22 ?></th>
                                    <th><?php echo $mn222 ?></th>
                                    <th><?php echo $mn2222 ?></th>
                                    <th><?php echo $mn22222 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php
        // perhitungan normalisasi

        $mv = $mn * $bb0;
        $mv1 = $mn1 * $bb0;
        $mv2 = $mn2 * $bb0;


        $mv0 = $mn0 * $bb1;
        $mv11 =  $mn11 * $bb1;
        $mv22 =  $mn22  * $bb1;

        $mv00 = $mn00 * $bb2;
        $mv111 = $mn111  * $bb2;
        $mv222 = $mn222 * $bb2;

        $mv000 = $mn000  * $bb3;
        $mv1111 = $mn1111 * $bb3;
        $mv2222 = $mn2222  * $bb3;

        $mv0000 = $mn0000 * $bb4;
        $mv11111 = $mn11111 * $bb4;
        $mv22222 = $mn22222 * $bb4;

        ?>


        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Matrik V</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>V</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th><?php echo $mv ?></th>
                                    <th><?php echo $mv0 ?></th>
                                    <th><?php echo $mv00 ?></th>
                                    <th><?php echo $mv000 ?></th>
                                    <th><?php echo $mv0000 ?></th>


                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php echo $mv1 ?></th>
                                    <th><?php echo $mv11 ?></th>
                                    <th><?php echo $mv111 ?></th>
                                    <th><?php echo $mv1111 ?></th>
                                    <th><?php echo $mv11111 ?></th>

                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th><?php echo $mv2 ?></th>
                                    <th><?php echo $mv22 ?></th>
                                    <th><?php echo $mv222 ?></th>
                                    <th><?php echo $mv2222 ?></th>
                                    <th><?php echo $mv22222 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php


        $ind1 = "2 ,5";
        $ind2 = "2 ,3";
        $ind3 = "1 ,3 ,4 ,5";
        $ind4 = "1 ,3, 4";
        $ind5 = "1 ,4 ,5";
        $ind6 = "2 ,5";



        ?>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Himpunan Concordance</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>Index</th>
                                    <th>Kriteria</th>

                                </tr>
                                <tr>
                                    <th>CC12</th>
                                    <th><?php echo $ind1 ?></th>
                                </tr>
                                <tr>
                                    <th>CC13</th>
                                    <th><?php echo $ind2 ?></th>
                                </tr>
                                <tr>
                                    <th>CC21</th>
                                    <th><?php echo $ind3 ?></th>
                                </tr>
                                <tr>
                                    <th>CC23</th>
                                    <th><?php echo $ind4 ?></th>
                                </tr>
                                <tr>
                                    <th>CC31</th>
                                    <th><?php echo $ind5 ?></th>
                                </tr>
                                <tr>
                                    <th>CC32</th>
                                    <th><?php echo $ind6 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php


        $mc = 0;
        $mc1 = $bb0 + $bb2 + $bb3 + $bb4;
        $mc2 = $bb0 + $bb2 + $bb4;
        $mc0 = $bb1 + $bb4;
        $mc11 = 0;
        $mc22 = $bb1 + $bb4;
        $mc00 = $bb1 + $bb2;
        $mc111 = $bb0 + $bb2 + $bb3;
        $mc222 = 0;
        $jjm = ($mc + $mc1 + $mc2 + $mc0 + $mc11 + $mc22 +  $mc00 +  $mc111 +  $mc222);
        $ct = $jjm / (3 * (3 - 1));

        ?>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Matrik Concordance</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>C</th>
                                    <th>A1</th>
                                    <th>A2</th>
                                    <th>A3</th>

                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th><?php echo $mc ?></th>
                                    <th><?php echo $mc0 ?></th>
                                    <th><?php echo $mc00 ?></th>




                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php echo $mc1 ?></th>
                                    <th><?php echo $mc11 ?></th>
                                    <th><?php echo $mc111 ?></th>


                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th><?php echo $mc2 ?></th>
                                    <th><?php echo $mc22 ?></th>
                                    <th><?php echo $mc222 ?></th>

                                </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <th><?php echo $jjm ?></th>

                                </tr>
                                <tr>
                                    <th>C Treshold</th>
                                    <th><?php echo $ct ?></th>

                                </tr>
                            </table>
                    </div>
                </div>
        </center>


        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Matrik Domain Concordance</h3>

                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>F</th>
                                    <th>A1</th>
                                    <th>A2</th>
                                    <th>A3</th>

                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th> <?php
                                            if ($mc > $ct) {
                                                $mc = 1;
                                                echo "1";
                                            } else {
                                                $mc = 0;
                                                echo "0";
                                            } ?>
                                    </th>
                                    <th><?php
                                        if ($mc0 > $ct) {
                                            $mc0 = 1;
                                            echo "1";
                                        } else {
                                            $mc0 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($mc00 > $ct) {
                                            $mc00 = 1;
                                            echo "1";
                                        } else {
                                            $mc00 = 0;
                                            echo "0";
                                        } ?>

                                    </th>

                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php
                                        if ($mc1 > $ct) {
                                            $mc1 = 1;
                                            echo "1";
                                        } else {
                                            $mc1 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($mc11 > $ct) {
                                            $mc11 = 1;
                                            echo "1";
                                        } else {
                                            $mc11 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($mc111 > $ct) {
                                            $mc111 = 1;
                                            echo "1";
                                        } else {
                                            $mc111 = 0;
                                            echo "0";
                                        } ?>

                                    </th>


                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th> <?php
                                            if ($mc2 > $ct) {
                                                $mc2 = 1;
                                                echo "1";
                                            } else {
                                                $mc2 = 0;
                                                echo "0";
                                            } ?>

                                    </th>
                                    <th><?php
                                        if ($mc22 > $ct) {
                                            $mc22 = 1;
                                            echo "1";
                                        } else {
                                            $mc22 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($mc222 > $ct) {
                                            $mc222 = 1;
                                            echo "1";
                                        } else {
                                            $mc222 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php


        $id1 = "1 ,3,4";
        $id2 = "1 ,4,5";
        $id3 = "2";
        $id4 = "2,5";
        $id5 = "2,3";
        $id6 = "1,3,4";

        ?>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Himpunan Discordance</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>Index</th>
                                    <th>Kriteria</th>

                                </tr>
                                <tr>
                                    <th>DD12</th>
                                    <th><?php echo $id1 ?></th>
                                </tr>
                                <tr>
                                    <th>DD13</th>
                                    <th><?php echo $id2 ?></th>
                                </tr>
                                <tr>
                                    <th>DD21</th>
                                    <th><?php echo $id3 ?></th>
                                </tr>
                                <tr>
                                    <th>DD23</th>
                                    <th><?php echo $id4 ?></th>
                                </tr>
                                <tr>
                                    <th>DD31</th>
                                    <th><?php echo $id5 ?></th>
                                </tr>
                                <tr>
                                    <th>DD32</th>
                                    <th><?php echo $id6 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php

        //A1
        $md = 0;
        $md1 = abs($mv11 - $mv0) / max(abs($mv1 - $mv), abs($mv11 - $mv0), abs($mv111 - $mv00), abs($mv1111 - $mv000), abs($mv11111 - $mv0000));
        $md2 = max(abs($mv11 - $mv22), abs($mv111 - $mv222)) / max(abs($mv1 - $mv2), abs($mv11 - $mv22), abs($mv111 - $mv222), abs($mv1111 - $mv2222), abs($mv11111 - $mv22222));
        //A2
        $md0 = max(abs($mv - $mv1), abs($mv00 - $mv111), abs($mv000 - $mv1111)) / max(abs($mv - $mv1), abs($mv0 - $mv11), abs($mv00 - $mv111), abs($mv000 - $mv1111), abs($mv0000 - $mv11111));
        $md11 = 0;
        $md22 = max(abs($mv2 - $mv1), abs($mv222 - $mv111), abs($mv2222 - $mv1111)) / max(abs($mv2 - $mv1), abs($mv22 - $mv11), abs($mv222 - $mv111), abs($mv2222 - $mv1111), abs($mv22222 - $mv11111));
        //A3
        $md00 = max(abs($mv - $mv2), abs($mv000 - $mv2222), abs($mv0000 - $mv22222)) / max(abs($mv - $mv2), abs($mv0 - $mv22), abs($mv00 - $mv222), abs($mv000 - $mv2222), abs($mv0000 - $mv22222));
        $md111 = max(abs($mv11 - $mv22), abs($mv11111 - $mv22222)) / max(abs($mv1 - $mv2), abs($mv11 - $mv22), abs($mv111 - $mv222), abs($mv1111 - $mv2222), abs($mv11111 - $mv22222));
        $md222 = 0;

        $jjd = ($md + $md1 + $md2 + $md0 + $md11 + $md22 +  $md00 +  $md111 +  $md222);
        $dt = $jjd / (3 * (3 - 1));

        ?>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Matrik Discordance</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>D</th>
                                    <th>A1</th>
                                    <th>A2</th>
                                    <th>A3</th>

                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th><?php echo $md ?></th>
                                    <th><?php echo $md0 ?></th>
                                    <th><?php echo $md00 ?></th>
                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php echo $md1 ?></th>
                                    <th><?php echo $md11 ?></th>
                                    <th><?php echo $md111 ?></th>


                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th><?php echo $md2 ?></th>
                                    <th><?php echo $md22 ?></th>
                                    <th><?php echo $md222 ?></th>

                                </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <th><?php echo $jjd ?></th>

                                </tr>
                                <tr>
                                    <th>D Treshold</th>
                                    <th><?php echo $dt ?></th>

                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Matrik Domain Decorcodance g</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                <tr>
                                    <th>G</th>
                                    <th>A1</th>
                                    <th>A2</th>
                                    <th>A3</th>

                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th> <?php
                                            if ($md > $dt) {
                                                $md = 1;
                                                echo "1";
                                            } else {
                                                $md = 0;
                                                echo "0";
                                            } ?>
                                    </th>
                                    <th><?php
                                        if ($md0 > $dt) {
                                            $md0 = 1;
                                            echo "1";
                                        } else {
                                            $md0 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($md00 > $dt) {
                                            $md00 = 1;
                                            echo "1";
                                        } else {
                                            $md00 = 0;
                                            echo "0";
                                        } ?>

                                    </th>

                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php
                                        if ($md1 > $dt) {
                                            $md1 = 1;
                                            echo "1";
                                        } else {
                                            $md1 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($md11 > $dt) {
                                            $md11 = 1;
                                            echo "1";
                                        } else {
                                            $md11 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($md111 > $dt) {
                                            $md111 = 1;
                                            echo "1";
                                        } else {
                                            $md111 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th> <?php
                                            if ($md2 > $dt) {
                                                $md2 = 1;
                                                echo "1";
                                            } else {
                                                $md2 = 0;
                                                echo "0";
                                            } ?>

                                    </th>
                                    <th><?php
                                        if ($md22 > $dt) {
                                            $md22 = 1;
                                            echo "1";
                                        } else {
                                            $md22 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                    <th><?php
                                        if ($md222 > $dt) {
                                            $md222 = 1;
                                            echo "1";
                                        } else {
                                            $md222 = 0;
                                            echo "0";
                                        } ?>

                                    </th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <?php

        //A1
        $agg0 = ($mc * $md);
        $agg1 = ($mc0 * $md0);
        $agg2 = ($mc00 * $md00);
        //A2
        $agg00 = ($mc1 * $md1);
        $agg11 = ($mc11 * $md11);
        $agg22 = ($mc111 * $md111);
        //A3
        $agg000 = ($mc2 * $md2);
        $agg111 = ($mc22 * $md22);
        $agg222 = ($mc222 * $md222);



        ?>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Aggregrate domainance matrix dan eliminasi alternatif</h3>
                        <table class="table">
                            <table class="table table-striped">
                                <tr>
                                    <<tr>
                                        <th>E</th>
                                        <th>A1</th>
                                        <th>A2</th>
                                        <th>A3</th>

                                </tr>
                                <tr>
                                    <th>A1</th>
                                    <th><?php echo $agg0 ?></th>
                                    <th><?php echo $agg1 ?></th>
                                    <th><?php echo $agg2 ?></th>

                                </tr>
                                <tr>
                                    <th>A2</th>
                                    <th><?php echo $agg00 ?></th>
                                    <th><?php echo $agg11 ?></th>
                                    <th><?php echo $agg111 ?></th>



                                </tr>
                                <tr>
                                    <th>A3</th>
                                    <th><?php echo $agg000 ?></th>
                                    <th><?php echo $agg111 ?></th>
                                    <th><?php echo $agg222 ?></th>
                                </tr>
                                </tr>
                            </table>
                            <center>
                                <h3> <i>Pilihan yang terpilih adalah Apartemen 2 dan Apartemen 3</i> </h3>

                                <div class="container">
                                    <ul class="pager">
                                        <li><a href="index.php">Previous</a></li>
                                        <li><a href="topsis.php">Next</a></li>
                                    </ul>
                                </div>
                            </center>
                    </div>
                </div>
        </center>
    </div>
    </head>

    </html>