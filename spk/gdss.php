<head>
    <title>Tugas WEB SPK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <div>

        <h3><b>Hasil Penyelesaian dengan Moora</b>
            <a href="index.php">
                <button class="btn btn-primary">Kembali</button>
            </a>
        </h3>
        <div class="row">
            <div class="col-sm-4">
                <table class="table table-bordered" border="1">
                    <tr>
                        <th>Juri 1</th>
                        <th>Nilai Yi</th>
                        <th>Ranking</th>
                    </tr>
                    <tr>
                        <th>A1</th>
                        <th><?php echo $a1j1 = 0.228 ?></th>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>A2</th>
                        <th><?php echo $a2j1 = 0.212 ?></th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>A3</th>
                        <th><?php echo $a3j1 = 0.216 ?></th>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>A4</th>
                        <th><?php echo $a4j1 = 0.184 ?></th>
                        <th>5</th>
                    </tr>
                    <tr>
                        <th>A5</th>
                        <th><?php echo $a5j1 = 0.249 ?></th>
                        <th>1</th>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table class="table table-bordered" border="1">
                    <tr>
                        <th>Juri 2</th>
                        <th>Nilai Yi</th>
                        <th>Ranking</th>
                    </tr>
                    <tr>
                        <th>A1</th>
                        <th><?php echo $a1j2 = 0.220 ?></th>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>A2</th>
                        <th><?php echo $a2j2 = 0.252 ?></th>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>A3</th>
                        <th><?php echo $a3j2 = 0.195 ?></th>
                        <th>5</th>
                    </tr>
                    <tr>
                        <th>A4</th>
                        <th><?php echo $a4j2 = 0.221 ?></th>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>A5</th>
                        <th><?php echo $a5j2 = 0.206 ?></th>
                        <th>4</th>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table class="table table-bordered" border="1">
                    <tr>
                        <th>Juri 3</th>
                        <th>Nilai Yi</th>
                        <th>Ranking</th>
                    </tr>
                    <tr>
                        <th>A1</th>
                        <th><?php echo $a1j3 = 0.230 ?></th>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>A2</th>
                        <th><?php echo $a2j3 = 0.245 ?></th>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>A3</th>
                        <th><?php echo $a3j3 = 0.209 ?></th>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>A4</th>
                        <th><?php echo $a4j3 = 0.198 ?></th>
                        <th>5</th>
                    </tr>
                    <tr>
                        <th>A5</th>
                        <th><?php echo $a5j3 = 0.205 ?></th>
                        <th>4</th>
                    </tr>
                </table>
            </div>
            <center>
                <h3>Bobot Borda</h3>
            </center>
            <div class="col-sm-6">
                <table class="table table-bordered" border="1">
                    <tr>
                        <th>Ranking 1</th>
                        <th>Ranking 2</th>
                        <th>Ranking 3</th>
                        <th>Ranking 4</th>
                        <th>Ranking 5</th>
                    </tr>
                    <tr>
                        <th><?php echo $bb1 = 5 ?></th>
                        <th><?php echo $bb2 = 4 ?></th>
                        <th><?php echo $bb3 = 3 ?></th>
                        <th><?php echo $bb4 = 2 ?></th>
                        <th><?php echo $bb5 = 1 ?></th>
                    </tr>
                </table>
            </div>
        </div>
        <h3><b>Menghitung Borda</b></h3>
        <div class="col-sm-8">
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Ranking</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>A1</th>
                    <th><?php echo $a1rb1 = 0 * $bb1 ?></th>
                    <th><?php echo $a1rb2 = ($a1j1 + $a1j3) * $bb2 ?></th>
                    <th><?php echo $a1rb3 = $a1j2 * $bb3 ?></th>
                    <th><?php echo $a1rb4 = 0 * $bb4 ?></th>
                    <th><?php echo $a1rb5 = 0 * $bb5 ?></th>
                </tr>
                <tr>
                    <th>A2</th>
                    <th><?php echo $a2rb1 = ($a2j2 + $a2j3) * $bb1 ?></th>
                    <th><?php echo $a2rb2 = 0 * $bb2 ?></th>
                    <th><?php echo $a2rb3 = 0 * $bb3 ?></th>
                    <th><?php echo $a2rb4 = $a2j1 * $bb4 ?></th>
                    <th><?php echo $a2rb5 = 0 * $bb5 ?></th>
                </tr>
                <tr>
                    <th>A3</th>
                    <th><?php echo $a3rb1 = 0 * $bb1 ?></th>
                    <th><?php echo $a3rb2 = 0 * $bb2 ?></th>
                    <th><?php echo $a3rb3 = ($a3j1 + $a3j3) * $bb3 ?></th>
                    <th><?php echo $a3rb4 = 0 * $bb4 ?></th>
                    <th><?php echo $a3rb5 = $a3j2 * $bb5 ?></th>
                </tr>
                <tr>
                    <th>A4</th>
                    <th><?php echo $a4rb1 = 0 * $bb1 ?></th>
                    <th><?php echo $a4rb2 = $a4j2 * $bb2 ?></th>
                    <th><?php echo $a4rb3 = 0 * $bb3 ?></th>
                    <th><?php echo $a4rb4 = 0 * $bb4 ?></th>
                    <th><?php echo $a4rb5 = ($a4j1 + $a4j3) * $bb5 ?></th>
                </tr>
                <tr>
                    <th>A5</th>
                    <th><?php echo $a5rb1 = $a5j1 * $bb1 ?></th>
                    <th><?php echo $a5rb2 = 0 * $bb2 ?></th>
                    <th><?php echo $a5rb3 = 0 * $bb3 ?></th>
                    <th><?php echo $a5rb4 = ($a5j2 + $a5j3) * $bb4 ?></th>
                    <th><?php echo $a5rb5 = 0 * $bb5 ?></th>
                </tr>
            </table>
        </div>
        <?php
        $pb1 = $a1rb1 + $a2rb1 + $a3rb1 + $a4rb1 + $a5rb1;
        $pb2 = $a1rb2 + $a2rb2 + $a3rb2 + $a4rb2 + $a5rb2;
        $pb3 = $a1rb3 + $a2rb3 + $a3rb3 + $a4rb3 + $a5rb3;
        $pb4 = $a1rb4 + $a2rb4 + $a3rb4 + $a4rb4 + $a5rb4;
        $pb5 = $a1rb5 + $a2rb5 + $a3rb5 + $a4rb5 + $a5rb5;
        $tpb = $pb1 + $pb2 + $pb3 + $pb4 + $pb5;
        ?>
        <div class="col-sm-4">
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Poin Borda</th>
                    <th>Nilai Borda</th>
                    <th>Ranking</th>
                </tr>
                <tr>
                    <th><?php echo $pb1 ?></th>
                    <th><?php echo number_format($pb1 / $tpb, 3, ",", ".") ?></th>
                    <th>2</th>
                </tr>
                <tr>
                    <th><?php echo $pb2 ?></th>
                    <th><?php echo number_format($pb2 / $tpb, 3, ",", ".") ?></th>
                    <th>1</th>
                </tr>
                <tr>
                    <th><?php echo $pb3 ?></th>
                    <th><?php echo number_format($pb3 / $tpb, 3, ",", ".") ?></th>
                    <th>4</th>
                </tr>
                <tr>
                    <th><?php echo $pb4 ?></th>
                    <th><?php echo number_format($pb4 / $tpb, 3, ",", ".") ?></th>
                    <th>5</th>
                </tr>
                <tr>
                    <th><?php echo $pb5 ?></th>
                    <th><?php echo number_format($pb5 / $tpb, 3, ",", ".") ?></th>
                    <th>3</th>
                </tr>
                <tr>
                    <th><?php echo $tpb ?></th>
                </tr>
            </table>
        </div>
        <h3><b>Pilihan yang terpilih adalah Apartemen 2 yaitu Purwanto.,S.Pd</b>
        </h3>
</head>