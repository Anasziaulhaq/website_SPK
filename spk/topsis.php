<head>
    <title>Tugas WEB SPK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- Kriteria -->
    <center>
        <?php

        $string = "Model";
        $string1 = "Brand";
        $string2 = "Kualitas";
        $string3 = "Harga";

        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Soal Topsis</h2>
                        <table class="table">
                            <table class="table table-striped">
                                <tr class="success">
                                    <th>Kriteria</th>
                                    <th></th>
                                </tr>
                                <tr class="success">
                                    <th>C1</th>
                                    <th><?php echo $string ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C2</th>
                                    <th><?php echo $string1 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C3</th>
                                    <th><?php echo $string2 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>C4</th>
                                    <th><?php echo $string3 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>


        <?php

        $string = "Sepatu1";
        $string1 = "Sepatu2";
        $string2 = "Sepatu3";

        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <th></th>
                        <table class="table table-striped">
                            <tr class="success">
                                <th>Alternatif</th>
                                <th></th>


                            </tr>
                            <tr class="success">
                                <th>A1</th>
                                <th><?php echo $string ?></th>


                            </tr>
                            <tr class="success">
                                <th>A2</th>
                                <th><?php echo $string1 ?></th>

                            </tr>
                            <tr class="success">
                                <th>A3</th>
                                <th><?php echo $string2 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>


        <?php

        $pm =  1;
        $pm1 = 2;
        $pm2 = 3;
        $pm3 = 4;
        $pm4 = 5;

        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Pembobotan Skor Alternatif C1,C2,C3</h2>
                        <table class="table table-striped">

                            <tr class="success">
                                <th>Sangat Kurang</th>
                                <th><?php echo $pm ?></th>


                            </tr>
                            <tr class="success">
                                <th>Kurang</th>
                                <th><?php echo $pm1 ?></th>

                            </tr>
                            <tr class="success">
                                <th>Sedang</th>
                                <th><?php echo $pm2 ?></th>
                            </tr>
                            <tr class="success">
                                <th>Baik</th>
                                <th><?php echo $pm3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>Sangat Baik</th>
                                <th><?php echo $pm4 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php

        $pm0 = 1;
        $pm1 = 2;
        $pm2 = 3;


        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>Pembobotan Skor Alternatif C4</h2>
                        <table class="table table-striped">
                            <tr class="success">
                                <th>Murah</th>
                                <th><?php echo $pm0 ?></th>


                            </tr>
                            <tr class="success">
                                <th>Sedang</th>
                                <th><?php echo $pm1 ?></th>

                            </tr>
                            <tr class="success">
                                <th>Mahal</th>
                                <th><?php echo $pm2 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>

        <?php

        $bb0 = 30;
        $bb1 = 25;
        $bb2 = 20;
        $bb3 = 25;


        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <th></th>
                        <h2>Bobot Tiap Kriteria</h2>
                        <table class="table table-striped">
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
                        </table>
                    </div>
                </div>
        </center>
        <?php


        $string0 = "Sedang";
        $string1 = "Baik";
        $string3 = "Sangat Baik";
        $string4 = "Murah";
        $string5 = "Kurang";
        $string2 = "Mahal";
        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <table class="table table-striped">

                            <th></th>
                            <th>Sepatu 1</th>
                            <th>Sepatu 2</th>
                            <th>Sepatu 3</th>

                            <tr class="">
                            </tr>
                            <tr class="success">
                                <th>C1</th>
                                <th><?php echo $string0 ?></th>
                                <th><?php echo $string1 ?></th>
                                <th><?php echo $string3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C2</th>
                                <th><?php echo $string3 ?></th>
                                <th><?php echo $string0 ?></th>
                                <th><?php echo $string1 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C3</th>
                                <th><?php echo $string0 ?></th>
                                <th><?php echo $string5 ?></th>
                                <th><?php echo $string3 ?></th>
                            </tr>
                            <tr class="success">
                                <th>C4</th>
                                <th><?php echo $string4 ?></th>
                                <th><?php echo $string2 ?></th>
                                <th><?php echo $string4 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>

        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menentukan Skor Ternormalisasi</h3>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Sepatu 1</th>
                                <th>Sepatu 2</th>
                                <th>Sepatu 3</th>

                            </tr>

                            <tr>
                                <th>C1</th>
                                <th><?php echo $pm2 ?></th>
                                <th><?php echo $pm3 ?></th>
                                <th><?php echo $pm4 ?></th>
                            </tr>
                            <tr>
                                <th>C2</th>
                                <th><?php echo $pm4 ?></th>
                                <th><?php echo $pm2 ?></th>
                                <th><?php echo $pm3 ?></th>

                            </tr>
                            <tr>
                                <th>C3</th>
                                <th><?php echo $pm2 ?></th>
                                <th><?php echo $pm1 ?></th>
                                <th><?php echo $pm4 ?></th>
                            </tr>
                            <tr>
                                <th>C4</th>
                                <th><?php echo $pm0 ?></th>
                                <th><?php echo $pm2 ?></th>
                                <th><?php echo $pm0 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php
        $nm = $pm2 / sqrt(pow($pm2, 2) + pow($pm3, 2) + pow($pm4, 2));
        $nmm = $pm3 / sqrt(pow($pm2, 2) + pow($pm3, 2) + pow($pm4, 2));
        $nmmm = $pm4 / sqrt(pow($pm2, 2) + pow($pm3, 2) + pow($pm4, 2));


        $nm1 = $pm4 / sqrt(pow($pm4, 2) + pow($pm2, 2) + pow($pm3, 2));
        $nm11 = $pm2 / sqrt(pow($pm4, 2) + pow($pm2, 2) + pow($pm3, 2));
        $nm111 = $pm3 / sqrt(pow($pm4, 2) + pow($pm2, 2) + pow($pm3, 2));


        $nm2 = $pm2 / sqrt(pow($pm2, 2) + pow($pm1, 2) + pow($pm4, 2));
        $nm22 = $pm1 / sqrt(pow($pm2, 2) + pow($pm1, 2) + pow($pm4, 2));
        $nm222 = $pm4 / sqrt(pow($pm2, 2) + pow($pm1, 2) + pow($pm4, 2));


        $nm3 = $pm0 / sqrt(pow($pm0, 2) + pow($pm2, 2) + pow($pm0, 2));
        $nm33 = $pm2 / sqrt(pow($pm0, 2) + pow($pm2, 2) + pow($pm0, 2));
        $nm333 = $pm0 / sqrt(pow($pm0, 2) + pow($pm2, 2) + pow($pm0, 2));



        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Sepatu 1</th>
                                <th>Sepatu 2</th>
                                <th>Sepatu 3</th>

                            </tr>

                            <tr>
                                <th>C1</th>
                                <th><?php echo $nm ?></th>
                                <th><?php echo $nmm ?></th>
                                <th><?php echo $nmmm ?></th>
                            </tr>
                            <tr>
                                <th>C2</th>
                                <th><?php echo $nm1 ?></th>
                                <th><?php echo $nm11 ?></th>
                                <th><?php echo $nm111 ?></th>

                            </tr>
                            <tr>
                                <th>C3</th>
                                <th><?php echo $nm2 ?></th>
                                <th><?php echo $nm22 ?></th>
                                <th><?php echo $nm222 ?></th>
                            </tr>
                            <tr>
                                <th>C4</th>
                                <th><?php echo $nm3 ?></th>
                                <th><?php echo $nm33 ?></th>
                                <th><?php echo $nm333 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php
        $mb = $nm * $bb0;
        $mbb = $nmm * $bb0;
        $mbbb = $nmmm * $bb0;


        $mb1 = $nm1 * $bb1;
        $mb11 = $nm11 * $bb1;
        $mb111 = $nm111 * $bb1;


        $mb2 = $nm2 * $bb2;
        $mb22 = $nm22  * $bb2;
        $mb222 = $nm222 * $bb2;


        $mb3 = $nm3 * $bb3;
        $mb33 = $nm33 * $bb3;
        $mb333 = $nm333 * $bb3;



        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menentukan Skor Terbobot</h3>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Sepatu 1</th>
                                <th>Sepatu 2</th>
                                <th>Sepatu 3</th>

                            </tr>

                            <tr>
                                <th>C1</th>
                                <th><?php echo $mb ?></th>
                                <th><?php echo $mbb ?></th>
                                <th><?php echo $mbbb ?></th>
                            </tr>
                            <tr>
                                <th>C2</th>
                                <th><?php echo $mb1 ?></th>
                                <th><?php echo $mb11 ?></th>
                                <th><?php echo $mb111 ?></th>

                            </tr>
                            <tr>
                                <th>C3</th>
                                <th><?php echo $mb2 ?></th>
                                <th><?php echo $mb22 ?></th>
                                <th><?php echo $mb222 ?></th>
                            </tr>
                            <tr>
                                <th>C4</th>
                                <th><?php echo $mb3 ?></th>
                                <th><?php echo $mb33 ?></th>
                                <th><?php echo $mb333 ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php
        $ms = max($mb, $mbbb, $mbbb);
        $mss = min($mb, $mbbb, $mbbb);



        $ms1 = max($mb1, $mb11, $mb111);
        $ms11 = min($mb1, $mb11, $mb111);



        $ms2 = max($mb2, $mb22, $mb222);
        $ms22 = min($mb2, $mb22, $mb222);



        $ms3 = min($mb3, $mb33, $mb333);
        $ms33 = max($mb3, $mb33, $mb333);



        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menentukan Solusi Ideal Positif dan Negatif</h3>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>A+</th>
                                <th>A-</th>

                            </tr>

                            <tr>
                                <th>C1</th>
                                <th><?php echo $ms ?></th>
                                <th><?php echo $mss ?></th>

                            </tr>
                            <tr>
                                <th>C2</th>
                                <th><?php echo $ms1 ?></th>
                                <th><?php echo $ms11 ?></th>


                            </tr>
                            <tr>
                                <th>C3</th>
                                <th><?php echo $ms2 ?></th>
                                <th><?php echo $ms22 ?></th>

                            </tr>
                            <tr>
                                <th>C4</th>
                                <th><?php echo $ms3 ?></th>
                                <th><?php echo $ms33 ?></th>

                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php
        $mj = sqrt(pow($ms - $mb, 2) + pow($ms1 - $mb1, 2) + pow($ms2 - $mb2, 2) + pow($ms3 - $mb3, 2));
        $mjj = sqrt(pow($mss - $mb, 2) + pow($ms11 - $mb1, 2) + pow($ms22 - $mb2, 2) + pow($ms33 - $mb3, 2));

        $mj1 = sqrt(pow($ms - $mbb, 2) + pow($ms1 - $mb11, 2) + pow($ms2 - $mb22, 2) + pow($ms3 - $mb33, 2));
        $mj11 = sqrt(pow($mss - $mbb, 2) + pow($ms11 - $mb11, 2) + pow($ms22 - $mb22, 2) + pow($ms33 - $mb33, 2));

        $mj2 = sqrt(pow($ms - $mbbb, 2) + pow($ms1 - $mb111, 2) + pow($ms2 - $mb222, 2) + pow($ms3 - $mb333, 2));
        $mj22 = sqrt(pow($mss - $mbbb, 2) + pow($ms11 - $mb111, 2) + pow($ms22 - $mb222, 2) + pow($ms33 - $mb333, 2));



        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menghitung Jarak Alternatif Positif dan Negatif</h3>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>A+</th>
                                <th>A-</th>

                            </tr>

                            <tr>
                                <th>C1</th>
                                <th><?php echo $mj ?></th>
                                <th><?php echo $mjj ?></th>

                            </tr>
                            <tr>
                                <th>C2</th>
                                <th><?php echo $mj1 ?></th>
                                <th><?php echo $mj11 ?></th>


                            </tr>
                            <tr>
                                <th>C3</th>
                                <th><?php echo $mj2 ?></th>
                                <th><?php echo $mj22 ?></th>

                            </tr>
                        </table>
                    </div>
                </div>
        </center>
        <?php
        $msa = $mjj / ($mjj + $mj);

        $msa1 = $mj11 / ($mj11 + $mj1);

        $msa2 = $mj22 / ($mj22 + $mj2);
        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h3>Menghitung Skor Ahkir</h3>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Hasil</th>

                            </tr>

                            <tr>
                                <th>V1</th>
                                <th><?php echo $msa ?></th>


                            </tr>
                            <tr>
                                <th>V2</th>
                                <th><?php echo $msa1 ?></th>


                            </tr>
                            <tr>
                                <th>V3</th>
                                <th><?php echo $msa2 ?></th>


                            </tr>
                        </table>
                        <center>
                            <h3> <i>Pilihan yang terpilih adalah Alternatif 3 yaitu Sepatu 3</i> </h3>
                            <div class="container">
                                <ul class="pager">

                                    <li><a href="moora.php">Next</a></li>
                                </ul>
                            </div>
                        </center>
                    </div>
                </div>
        </center>
        </body>