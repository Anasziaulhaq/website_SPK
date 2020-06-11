<html>

<head>
  <title>Tugas WEB SPK</title>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <center>


<body>
  KUMPULAN SOAL BERDASARKAN METODE
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
  // Sistem Keamanan Apartemen
  $c51 = 3;
  $c52 = 3;
  $c53 = 4;
  $c54 = 10;
  $string = "Benefit";
  ?>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="btn btn-success" href="about.php">WEB SPK</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="saw.php">SAW & WP</a></li>
        <li class="active"><a href="ahp.php">AHP</a></li>
        <li class="active"><a href="electre.php">ELECTRE</a></li>
        <li class="active"><a href="topsis.php">TOPSIS</a></li>
        <li class="active"><a href="moora.php">MOORA</a></li>
        <li class="active"><a href="gdss.php">GDSS</a></li>
      </ul>
    </div>
  </nav>
  <center>
    <div class="container mt-4">
      <div class="container">
        <div class="well well-sm">
          <h3>Soal SAW & WP</h3>
          <table class="table">
            <table class="table table-striped">
              <tr class="success">
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
                  <tr class="success">
                    <th>Kriteria</th>
                    <th>pasar</th>
                    <th>pendapatan</th>
                    <th>infrastruktur</th>
                    <th>transportasi</th>
                  </tr>
                  <tr class="success">
                    <th>pasar</th>
                    <th><?php echo $c11 ?></th>
                    <th><?php echo $c12 ?></th>
                    <th><?php echo $c13 ?></th>
                    <th><?php echo $c14 ?></th>
                  </tr>
                  <tr class="success">
                    <th>pendapatan</th>
                    <th><?php echo $c21 ?></th>
                    <th><?php echo $c22 ?></th>
                    <th><?php echo $c23 ?></th>
                    <th><?php echo $c24 ?></th>
                  </tr>
                  <tr class="success">
                    <th>infrastruktur</th>
                    <th><?php echo $c31 ?></th>
                    <th><?php echo $c32 ?></th>
                    <th><?php echo $c33 ?></th>
                    <th><?php echo $c34 ?></th>
                  </tr>
                  <tr class="success">
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
                  <tr class="success">
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
                <tr class="success">
                  <th>Kriteria</th>
                  <th>pasar</th>
                  <th>pendapatan</th>
                  <th>infrastruktur</th>
                  <th>transportasi</th>
                  <th>jumlah</th>
                  <th>PW</th>
                </tr>
                <tr class="success">
                  <th>pasar</th>
                  <th><?php echo $nc11 ?></th>
                  <th><?php echo $nc12 ?></th>
                  <th><?php echo $nc13 ?></th>
                  <th><?php echo $nc14 ?></th>
                  <th><?php echo $jn1 ?></th>
                  <th><?php echo $pwc1 ?></th>
                </tr>
                <tr class="success">
                  <th>pendapatan</th>
                  <th><?php echo $nc21 ?></th>
                  <th><?php echo $nc22 ?></th>
                  <th><?php echo $nc23 ?></th>
                  <th><?php echo $nc24 ?></th>
                  <th><?php echo $jn2 ?></th>
                  <th><?php echo $pwc2 ?></th>
                </tr>
                <tr class="success">
                  <th>infrastruktur</th>
                  <th><?php echo $nc31 ?></th>
                  <th><?php echo $nc32 ?></th>
                  <th><?php echo $nc33 ?></th>
                  <th><?php echo $nc34 ?></th>
                  <th><?php echo $jn3 ?></th>
                  <th><?php echo $pwc3 ?></th>
                </tr>
                <tr class="success">
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
                <tr class="success">
                  <th>Kriteria</th>
                  <th>Matriks</th>
                  <th>Matriks / PW</th>
                </tr>
                <tr class="success">
                  <th>pasar</th>
                  <th><?php echo $mc1 ?></th>
                  <th><?php echo $mcw1 ?></th>
                </tr>
                <tr class="success">
                  <th>pendapatan</th>
                  <th><?php echo $mc2 ?></th>
                  <th><?php echo $mcw2 ?></th>
                </tr>
                <tr class="success">
                  <th>infrastruktur</th>
                  <th><?php echo $mc3 ?></th>
                  <th><?php echo $mcw3 ?></th>
                </tr>
                <tr class="success">
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
                <tr class="success">
                  <th>Perhitungan</th>
                  <th>Hasil</th>
                </tr>
                <tr class="success">
                  <th>λmaks</th>
                  <th><?php echo $cm ?></th>
                </tr>
                <tr class="success">
                  <th>CI</th>
                  <th><?php echo $cci ?></th>
                </tr>
                <tr class="success">
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

  <h3></h3>
  <?php


  $string0 = "Sedang";
  $string1 = "Baik";
  $string3 = "Sangat Baik";
  $string4 = "Murah";
  $string5 = "Kurang";
  $string2 = "Mahal";



  ?><center>
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

    <?php
    // C1
    $ket1 = "Pendapatan";
    $c11 = "0,25";
    $string1 = "Cost";
    //C2
    $ket2 = "Lama warga tinggal";
    $c12 = "0,2";
    $string = "Benefit";
    //C3
    $ket3 = "Pekerjaan";
    $c13 = "0,2";
    $string1 = "Cost";
    // C4
    $ket4 = "Dinding Rumah";
    $c14 = "0,2";
    $string1 = "Cost";
    // C5
    $ket5 = "Lantai Rumah";
    $c15 = "0,15";
    $string1 = "Cost";
    ?>
    <center>
      <div class="container mt-4">
        <div class="container">
          <div class="well well-sm">
            <h3>Soal MOORA</h3>
            <table class="table">
              <table class="table table-striped">
                <tr class="success">
                <tr class="success">
                  <th>Kriteria</th>
                  <th>Keterangan</th>
                  <th>Bobot</th>
                  <th>Jenis Atribut</th>
                </tr>
                <tr class="success">
                  <th>C1</th>
                  <th><?php echo $ket1 ?></th>
                  <th><?php echo $c11 ?></th>
                  <th><?php echo $string1 ?></th>
                </tr>
                <tr class="success">
                  <th>C2</th>
                  <th><?php echo $ket2 ?></th>
                  <th><?php echo $c12 ?></th>
                  <th><?php echo $string ?></th>
                </tr>
                <tr class="success">
                  <th>C3</th>
                  <th><?php echo $ket3 ?></th>
                  <th><?php echo $c13 ?></th>
                  <th><?php echo $string1 ?></th>
                </tr>
                <tr class="success">
                  <th>C4</th>
                  <th><?php echo $ket4 ?></th>
                  <th><?php echo $c14 ?></th>
                  <th><?php echo $string1 ?></th>
                </tr>
                <tr class="success">
                  <th>C5</th>
                  <th><?php echo $ket5 ?></th>
                  <th><?php echo $c15 ?></th>
                  <th><?php echo $string1 ?></th>
                </tr>
                </tr>
              </table>
          </div>
        </div>
    </center>
    <?php

    //Pembobotan                  
    //C3
    $ket31 = "Sangat Kurang";
    $ket32 = "Kurang";
    $ket33 = "Cukup";
    $ket34 = "Baik";

    $c131 = "0,25";
    $c132 = "0,5";
    $c133 = "0,75";
    $c134 = "1";


    ?>
    <center>
      <div class="container mt-4">
        <div class="container">
          <div class="well well-sm">
            <h3>Pembobotan Kriteria C3,C4,C5</h3>
            <table class="table">
              <table class="table table-striped">
                <tr class="success">
                <tr class="success">
                  <th>C3</th>
                  <th>Nilai</th>
                  <th>Bobot</th>
                </tr>
                <tr class="success">
                  <th>Tukang Becak</th>
                  <th><?php echo $ket31 ?></th>
                  <th><?php echo $c131 ?></th>
                </tr>
                <tr class="success">
                  <th>Petani</th>
                  <th><?php echo $ket32 ?></th>
                  <th><?php echo $c132 ?></th>
                </tr>
                <tr class="success">
                  <th>Wiraswasta</th>
                  <th><?php echo $ket33 ?></th>
                  <th><?php echo $c133 ?></th>
                </tr>
                <tr class="success">
                  <th>Karyawan</th>
                  <th><?php echo $ket34 ?></th>
                  <th><?php echo $c134 ?></th>
                </tr>
              </table>
          </div>
        </div>
    </center>
  </center>
  <?php

  //Pembobotan                  
  //C4
  $ket41 = "Sangat Kurang";
  $ket42 = "Kurang";
  $ket43 = "Cukup";
  $ket44 = "Baik";

  $c141 = "0,25";
  $c142 = "0,5";
  $c143 = "0,75";
  $c144 = "1";


  ?>
  <center>
    <div class="container mt-4">
      <div class="container">
        <div class="well well-sm">
          <table class="table">
            <table class="table table-striped">
              <tr class="success">
              <tr class="success">
                <th>C4</th>
                <th>Nilai</th>
                <th>Bobot</th>
              </tr>
              <tr class="success">
                <th>Dinding tepas</th>
                <th><?php echo $ket41 ?></th>
                <th><?php echo $c141 ?></th>
              </tr>
              <tr class="success">
                <th>Dinding papan</th>
                <th><?php echo $ket42 ?></th>
                <th><?php echo $c142 ?></th>
              </tr>
              <tr class="success">
                <th>Dinding permanen</th>
                <th><?php echo $ket43 ?></th>
                <th><?php echo $c143 ?></th>
              </tr>
              <tr class="success">
                <th>Dinding mewah</th>
                <th><?php echo $ket44 ?></th>
                <th><?php echo $c144 ?></th>
              </tr>
            </table>
        </div>
      </div>
  </center>
  </center>
  <?php

  //Pembobotan                  
  //C5
  $ket51 = "Sangat Kurang";
  $ket52 = "Kurang";
  $ket53 = "Cukup";


  $c151 = "0,25";
  $c152 = "0,5";
  $c153 = "0,75";



  ?>
  <center>
    <div class="container mt-4">
      <div class="container">
        <div class="well well-sm">
          <table class="table">
            <table class="table table-striped">

              <tr class="success">
                <th>C5</th>
                <th>Nilai</th>
                <th>Bobot</th>
              </tr>
              <tr class="success">
                <th>Lantai tanah</th>
                <th><?php echo $ket51 ?></th>
                <th><?php echo $c151 ?></th>
              </tr>
              <tr class="success">
                <th>Lantai semen</th>
                <th><?php echo $ket52 ?></th>
                <th><?php echo $c152 ?></th>
              </tr>
              <tr class="success">
                <th>Lantai keramik</th>
                <th><?php echo $ket53 ?></th>
                <th><?php echo $c153 ?></th>
              </tr>

            </table>
        </div>
      </div>
  </center>
</body>
</center>
<center>
  <div class="container mt-4">
    <div class="container">
      <div class="well well-sm">
        <h3>Soal GDSS</h3>
        <table class="table">
          <table class="table table-striped">
            <tr class="success">
            <tr class="success">
              <h4>Benefit : C1, C2, C5, dan C6</h4>
              <h4>Cost : C3 dan C4</h4>
              <th>Juri 1</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
              <th>C6</th>
            </tr>
            <tr class="success">
              <th>A1</th>
              <th>1</th>
              <th>1</th>
              <th>3</th>
              <th>4</th>
              <th>1</th>
              <th>4</th>
            </tr>
            <tr class="success">
              <th>A2</th>
              <th>1</th>
              <th>1</th>
              <th>4</th>
              <th>3</th>
              <th>1</th>
              <th>3</th>
            </tr>
            <tr class="success">
              <th>A3</th>
              <th>1</th>
              <th>1</th>
              <th>4</th>
              <th>4</th>
              <th>1</th>
              <th>4</th>
            </tr>
            <tr class="success">
              <th>A4</th>
              <th>1</th>
              <th>1</th>
              <th>3</th>
              <th>3</th>
              <th>0</th>
              <th>3</th>
            </tr>
            <tr class="success">
              <th>A5</th>
              <th>1</th>
              <th>1</th>
              <th>3</th>
              <th>3</th>
              <th>1</th>
              <th>4</th>
            </tr>
            </tr>
          </table>
      </div>
    </div>
</center>
<center>
  <div>
    <div class="container mt-4">
      <div class="container">
        <div class="well well-sm">
          <h2></h2>
          <table class="table">
            <table class="table table-striped">
              <thead>
                <tr class="success">
                  <th>Juri 2</th>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                  <th>C6</th>
                </tr>
                <tr class="success">
                  <th>A1</th>
                  <th>1</th>
                  <th>1</th>
                  <th>4</th>
                  <th>4</th>
                  <th>1</th>
                  <th>4</th>
                </tr>
                <tr class="success">
                  <th>A2</th>
                  <th>1</th>
                  <th>1</th>
                  <th>3</th>
                  <th>3</th>
                  <th>1</th>
                  <th>4</th>
                </tr>
                <tr class="success">
                  <th>A3</th>
                  <th>1</th>
                  <th>1</th>
                  <th>4</th>
                  <th>4</th>
                  <th>1</th>
                  <th>3</th>
                </tr>
                <tr class="success">
                  <th>A4</th>
                  <th>1</th>
                  <th>1</th>
                  <th>4</th>
                  <th>2</th>
                  <th>0</th>
                  <th>4</th>
                </tr>
                <tr class="success">
                  <th>A5</th>
                  <th>1</th>
                  <th>1</th>
                  <th>3</th>
                  <th>4</th>
                  <th>1</th>
                  <th>3</th>
                </tr>
            </table>
        </div>
      </div>
</center>
<center>
  <div>
    <div class="container mt-4">
      <div class="container">
        <div class="well well-sm">
          <h2></h2>
          <table class="table">
            <table class="table table-striped">
              <thead>
                <tr class="success">
                  <th>Juri 3</th>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                  <th>C6</th>
                </tr>
                <tr class="success">
                  <th>A1</th>
                  <th>1</th>
                  <th>1</th>
                  <th>3</th>
                  <th>3</th>
                  <th>1</th>
                  <th>3</th>
                </tr>
                <tr class="success">
                  <th>A2</th>
                  <th>1</th>
                  <th>1</th>
                  <th>4</th>
                  <th>3</th>
                  <th>1</th>
                  <th>4</th>
                </tr>
                <tr class="success">
                  <th>A3</th>
                  <th>1</th>
                  <th>1</th>
                  <th>3</th>
                  <th>4</th>
                  <th>1</th>
                  <th>3</th>
                </tr>
                <tr class="success">
                  <th>A4</th>
                  <th>1</th>
                  <th>1</th>
                  <th>4</th>
                  <th>4</th>
                  <th>1</th>
                  <th>3</th>
                </tr>
                <tr class="success">
                  <th>A5</th>
                  <th>1</th>
                  <th>1</th>
                  <th>4</th>
                  <th>3</th>
                  <th>0</th>
                  <th>4</th>
                </tr>
            </table>
        </div>
      </div>
</center>

</html>