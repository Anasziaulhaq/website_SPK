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
        // A1
        $x1 = 500000;
        $x11 = 15;
        $x111 = "0.25";
        $x1111 = "0.5";
        $x11111 = "0.5";

        //A2
        $x2 = 600000;
        $x22 = 6;
        $x222 = "0.5";
        $x2222 = "0.5";
        $x22222 = "0.5";
        //A3
        $x3 = 1000000;
        $x33 = 3;
        $x333 = "0.75";
        $x3333 = "0.5";
        $x33333 = "0.25";
        // A4
        $x4 = 650000;
        $x44 = 10;
        $x444 = "0.5";
        $x4444 = "0.5";
        $x44444 = "0.5";
        // A5
        $x5 = 500000;
        $x55 = 7;
        $x555 = "0.25";
        $x5555 = "0.5";
        $x55555 = "0.5";

        // A6
        $x6 = 600000;
        $x66 = 3;
        $x666 = "0.5";
        $x6666 = "0.25";
        $x66666 = "0.25";
        //A7
        $x7 = 400000;
        $x77 = 5;
        $x777 = "0.25";
        $x7777 = "0.25";
        $x77777 = "0.25";
        //A8
        $x8 = 700000;
        $x88 = 10;
        $x888 = "0.5";
        $x8888 = "0.5";
        $x88888 = "0.5";
        // A9
        $x9 = 500000;
        $x99 = 8;
        $x999 = "0.25";
        $x9999 = "0.5";
        $x99999 = "0.5";
        // A0
        $x0 = 1200000;
        $x00 = 10;
        $x000 = "0.75";
        $x0000 = "0.5";
        $x00000 = "0.5";
        ?>
        <center>
            <div class="container mt-4">
                <div class="container">
                    <div class="well well-sm">
                        <h2>DATA </h2>
                        <table class="table">
                            <table class="table table-striped">
                                <tr class="success">
                                    <th>X</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                                <tr class="success">
                                    <th>A1</th>
                                    <th><?php echo $x1 ?></th>
                                    <th><?php echo $x11 ?></th>
                                    <th><?php echo $x111 ?></th>
                                    <th><?php echo $x1111 ?></th>
                                    <th><?php echo $x11111 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A2</th>
                                    <th><?php echo $x2 ?></th>
                                    <th><?php echo $x22 ?></th>
                                    <th><?php echo $x222 ?></th>
                                    <th><?php echo $x2222 ?></th>
                                    <th><?php echo $x22222 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A3</th>
                                    <th><?php echo $x3 ?></th>
                                    <th><?php echo $x33 ?></th>
                                    <th><?php echo $x333 ?></th>
                                    <th><?php echo $x3333 ?></th>
                                    <th><?php echo $x33333 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A4</th>
                                    <<th><?php echo $x4 ?></>
                                        <th><?php echo $x44 ?></th>
                                        <th><?php echo $x444 ?></th>
                                        <th><?php echo $x4444 ?></th>
                                        <th><?php echo $x44444 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A5</th>
                                    <th><?php echo $x5 ?></th>
                                    <th><?php echo $x55 ?></th>
                                    <th><?php echo $x555 ?></th>
                                    <th><?php echo $x5555 ?></th>
                                    <th><?php echo $x55555 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A6</th>
                                    <th><?php echo $x6 ?></th>
                                    <th><?php echo $x66 ?></th>
                                    <th><?php echo $x666 ?></th>
                                    <th><?php echo $x6666 ?></th>
                                    <th><?php echo $x66666 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A7</th>
                                    <th><?php echo $x7 ?></th>
                                    <th><?php echo $x77 ?></th>
                                    <th><?php echo $x777 ?></th>
                                    <th><?php echo $x7777 ?></th>
                                    <th><?php echo $x77777 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A8</th>
                                    <th><?php echo $x8 ?></th>
                                    <th><?php echo $x88 ?></th>
                                    <th><?php echo $x888 ?></th>
                                    <th><?php echo $x8888 ?></th>
                                    <th><?php echo $x88888 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A9</th>
                                    <th><?php echo $x9 ?></th>
                                    <th><?php echo $x99 ?></th>
                                    <th><?php echo $x999 ?></th>
                                    <th><?php echo $x9999 ?></th>
                                    <th><?php echo $x99999 ?></th>
                                </tr>
                                <tr class="success">
                                    <th>A0</th>
                                    <th><?php echo $x0 ?></th>
                                    <th><?php echo $x00 ?></th>
                                    <th><?php echo $x000 ?></th>
                                    <th><?php echo $x0000 ?></th>
                                    <th><?php echo $x00000 ?></th>
                                </tr>
                            </table>
                    </div>
                </div>
        </center>
        <center>
            <?php
            // A1
            $mn1 = $x1 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn11 = $x11 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn111 = $x111 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn1111 = $x1111 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn11111 = $x11111 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));

            //A2
            $mn2 = $x2 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn22 = $x22 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn222 = $x222 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn2222 = $x2222 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn22222 = $x22222 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            //A3
            $mn3 = $x3 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn33 = $x33 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn333 = $x333 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn3333 = $x3333 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn33333 = $x33333 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            // A4
            $mn4 = $x4  / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn44 = $x44 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn444 = $x444 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn4444 = $x4444 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn44444 = $x44444 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            // A5
            $mn5 = $x5 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn55 = $x55 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn555 = $x555 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn5555 = $x5555 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn55555 = $x55555 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));

            // A6
            $mn6 = $x6 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn66 = $x66 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn666 = $x666 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn6666 = $x6666 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn66666 = $x66666 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            //A7
            $mn7 = $x7  / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn77 = $x77 /  sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn777 = $x777 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn7777 = $x7777 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn77777 = $x77777 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            //A8
            $mn8 = $x8 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn88 = $x88 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn888 = $x888 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn8888 = $x8888 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn88888 = $x88888 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            // A9
            $mn9 = $x9 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn99 = $x99 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn999 = $x999 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn9999 = $x9999 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn99999 = $x99999 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            // A0
            $mn0 = $x0 / sqrt(pow($x1, 2) + (pow($x2, 2) + (pow($x3, 2) + (pow($x4, 2) + (pow($x5, 2) + (pow($x6, 2) + (pow($x7, 2) + (pow($x8, 2) + (pow($x9, 2) + (pow($x0, 2)))))))))));
            $mn00 = $x00 / sqrt(pow($x11, 2) + (pow($x22, 2) + (pow($x33, 2) + (pow($x44, 2) + (pow($x55, 2) + (pow($x66, 2) + (pow($x77, 2) + (pow($x88, 2) + (pow($x99, 2) + (pow($x00, 2)))))))))));
            $mn000 = $x000 / sqrt(pow($x111, 2) + (pow($x222, 2) + (pow($x333, 2) + (pow($x444, 2) + (pow($x555, 2) + (pow($x666, 2) + (pow($x777, 2) + (pow($x888, 2) + (pow($x999, 2) + (pow($x000, 2)))))))))));
            $mn0000 = $x0000 / sqrt(pow($x1111, 2) + (pow($x2222, 2) + (pow($x3333, 2) + (pow($x4444, 2) + (pow($x5555, 2) + (pow($x6666, 2) + (pow($x7777, 2) + (pow($x8888, 2) + (pow($x9999, 2) + (pow($x0000, 2)))))))))));
            $mn00000 = $x00000 / sqrt(pow($x11111, 2) + (pow($x22222, 2) + (pow($x33333, 2) + (pow($x44444, 2) + (pow($x55555, 2) + (pow($x66666, 2) + (pow($x77777, 2) + (pow($x88888, 2) + (pow($x99999, 2) + (pow($x00000, 2)))))))))));
            ?>
            <center>
                <div class="container mt-4">
                    <div class="container">
                        <div class="well well-sm">
                            <h2>Membuat Matriks Normalisasi X * ij</h2>
                            <table class="table">
                                <table class="table table-striped">
                                    <tr class="success">
                                        <th>X</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                    </tr>
                                    <tr class="success">
                                        <th>A1</th>
                                        <th><?php echo $mn1 ?></th>
                                        <th><?php echo $mn11 ?></th>
                                        <th><?php echo $mn111 ?></th>
                                        <th><?php echo $mn1111 ?></th>
                                        <th><?php echo $mn11111 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A2</th>
                                        <th><?php echo $mn2 ?></th>
                                        <th><?php echo $mn22 ?></th>
                                        <th><?php echo $mn222 ?></th>
                                        <th><?php echo $mn2222 ?></th>
                                        <th><?php echo $mn22222 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A3</th>
                                        <th><?php echo $mn3 ?></th>
                                        <th><?php echo $mn33 ?></th>
                                        <th><?php echo $mn333 ?></th>
                                        <th><?php echo $mn3333 ?></th>
                                        <th><?php echo $mn33333 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A4</th>
                                        <<th><?php echo $mn4 ?></>
                                            <th><?php echo $mn44 ?></th>
                                            <th><?php echo $mn444 ?></th>
                                            <th><?php echo $mn4444 ?></th>
                                            <th><?php echo $mn44444 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A5</th>
                                        <th><?php echo $mn5 ?></th>
                                        <th><?php echo $mn55 ?></th>
                                        <th><?php echo $mn555 ?></th>
                                        <th><?php echo $mn5555 ?></th>
                                        <th><?php echo $mn55555 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A6</th>
                                        <th><?php echo $mn6 ?></th>
                                        <th><?php echo $mn66 ?></th>
                                        <th><?php echo $mn666 ?></th>
                                        <th><?php echo $mn6666 ?></th>
                                        <th><?php echo $mn66666 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A7</th>
                                        <th><?php echo $mn7 ?></th>
                                        <th><?php echo $mn77 ?></th>
                                        <th><?php echo $mn777 ?></th>
                                        <th><?php echo $mn7777 ?></th>
                                        <th><?php echo $mn77777 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A8</th>
                                        <th><?php echo $mn8 ?></th>
                                        <th><?php echo $mn88 ?></th>
                                        <th><?php echo $mn888 ?></th>
                                        <th><?php echo $mn8888 ?></th>
                                        <th><?php echo $mn88888 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A9</th>
                                        <th><?php echo $mn9 ?></th>
                                        <th><?php echo $mn99 ?></th>
                                        <th><?php echo $mn999 ?></th>
                                        <th><?php echo $mn9999 ?></th>
                                        <th><?php echo $mn99999 ?></th>
                                    </tr>
                                    <tr class="success">
                                        <th>A0</th>
                                        <th><?php echo $mn0 ?></th>
                                        <th><?php echo $mn00 ?></th>
                                        <th><?php echo $mn000 ?></th>
                                        <th><?php echo $mn0000 ?></th>
                                        <th><?php echo $mn00000 ?></th>
                                    </tr>
                                </table>
                        </div>
                    </div>
            </center>
            <center>
                <?php

                // A1
                $bb1 = $mn1 * "0.25";
                $bb11 =   $mn11 * "0.2";
                $bb111 =  $mn111 * "0.2";
                $bb1111 =  $mn1111 * "0.2";
                $bb11111 =  $mn11111 * "0.15";

                //A2
                $bb2 = $mn2 * "0.25";
                $bb22 =   $mn22 * "0.2";
                $bb222 =  $mn222 * "0.2";
                $bb2222 =  $mn2222 * "0.2";
                $bb22222 =  $mn22222 * "0.15";

                //A3
                $bb3 = $mn3 * "0.25";
                $bb33 =   $mn33 * "0.2";
                $bb333 =  $mn333 * "0.2";
                $bb3333 =  $mn3333 * "0.2";
                $bb33333 =  $mn33333 * "0.15";

                // // A4
                $bb4 = $mn4 * "0.25";
                $bb44 =   $mn44 * "0.2";
                $bb444 =  $mn444 * "0.2";
                $bb4444 =  $mn4444 * "0.2";
                $bb44444 =  $mn44444 * "0.15";

                // //A5
                $bb5 = $mn5 * "0.25";
                $bb55 =   $mn55 * "0.2";
                $bb555 =  $mn555 * "0.2";
                $bb5555 =  $mn5555 * "0.2";
                $bb55555 =  $mn55555 * "0.15";

                // //A6
                $bb6 = $mn6 * "0.25";
                $bb66 =   $mn66 * "0.2";
                $bb666 =  $mn666 * "0.2";
                $bb6666 =  $mn6666 * "0.2";
                $bb66666 =  $mn66666 * "0.15";


                // //A7
                $bb7 = $mn7 * "0.25";
                $bb77 =   $mn77 * "0.2";
                $bb777 =  $mn777 * "0.2";
                $bb7777 =  $mn7777 * "0.2";
                $bb77777 =  $mn77777 * "0.15";

                // //A8
                $bb8 = $mn8 * "0.25";
                $bb88 =   $mn88 * "0.2";
                $bb888 =  $mn888 * "0.2";
                $bb8888 =  $mn8888 * "0.2";
                $bb88888 =  $mn88888 * "0.15";

                // //9
                $bb9 = $mn9 * "0.25";
                $bb99 =   $mn99 * "0.2";
                $bb999 =  $mn999 * "0.2";
                $bb9999 =  $mn9999 * "0.2";
                $bb99999 =  $mn99999 * "0.15";


                // //A0
                $bb0 = $mn0 * "0.25";
                $bb00 =   $mn00 * "0.2";
                $bb000 =  $mn000 * "0.2";
                $bb0000 =  $mn0000 * "0.2";
                $bb00000 =  $mn00000 * "0.15";

                ?>
                <center>
                    <div class="container mt-4">
                        <div class="container">
                            <div class="well well-sm">
                                <h3>Menghitung Nilai Optimasi Multiobjektif</h3>
                                <table class="table">
                                    <table class="table table-striped">
                                        <tr class="success">
                                            <th>Bobot</th>
                                            <th>0.25</th>
                                            <th>0.2</th>
                                            <th>0.2</th>
                                            <th>0.2</th>
                                            <th>0.15</th>
                                        </tr>
                                        <tr class="success">
                                            <th></th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                        </tr>
                                        <tr class="success">
                                            <th>A1</th>
                                            <th><?php echo $bb1 ?></th>
                                            <th><?php echo $bb11 ?></th>
                                            <th><?php echo $bb111 ?></th>
                                            <th><?php echo $bb1111 ?></th>
                                            <th><?php echo $bb11111 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A2</th>
                                            <th><?php echo $bb2 ?></th>
                                            <th><?php echo $bb22 ?></th>
                                            <th><?php echo $bb222 ?></th>
                                            <th><?php echo $bb2222 ?></th>
                                            <th><?php echo $bb22222 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A3</th>
                                            <th><?php echo $bb3 ?></th>
                                            <th><?php echo $bb33 ?></th>
                                            <th><?php echo $bb333 ?></th>
                                            <th><?php echo $bb3333 ?></th>
                                            <th><?php echo $bb33333 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A4</th>
                                            <<th><?php echo $bb4 ?></>
                                                <th><?php echo $bb44 ?></th>
                                                <th><?php echo $bb444 ?></th>
                                                <th><?php echo $bb4444 ?></th>
                                                <th><?php echo $bb44444 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A5</th>
                                            <th><?php echo $bb5 ?></th>
                                            <th><?php echo $bb55 ?></th>
                                            <th><?php echo $bb555 ?></th>
                                            <th><?php echo $bb5555 ?></th>
                                            <th><?php echo $bb55555 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A6</th>
                                            <th><?php echo $bb6 ?></th>
                                            <th><?php echo $bb66 ?></th>
                                            <th><?php echo $bb666 ?></th>
                                            <th><?php echo $bb6666 ?></th>
                                            <th><?php echo $bb66666 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A7</th>
                                            <th><?php echo $bb7 ?></th>
                                            <th><?php echo $bb77 ?></th>
                                            <th><?php echo $bb777 ?></th>
                                            <th><?php echo $bb7777 ?></th>
                                            <th><?php echo $bb77777 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A8</th>
                                            <th><?php echo $bb8 ?></th>
                                            <th><?php echo $bb88 ?></th>
                                            <th><?php echo $bb888 ?></th>
                                            <th><?php echo $bb8888 ?></th>
                                            <th><?php echo $bb88888 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A9</th>
                                            <th><?php echo $bb9 ?></th>
                                            <th><?php echo $bb99 ?></th>
                                            <th><?php echo $bb999 ?></th>
                                            <th><?php echo $bb9999 ?></th>
                                            <th><?php echo $bb99999 ?></th>
                                        </tr>
                                        <tr class="success">
                                            <th>A0</th>
                                            <th><?php echo $bb0 ?></th>
                                            <th><?php echo $bb00 ?></th>
                                            <th><?php echo $bb000 ?></th>
                                            <th><?php echo $bb0000 ?></th>
                                            <th><?php echo $bb00000 ?></th>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                </center>
                <center>
                    <?php
                    // MIN
                    //A1
                    $min1 = $bb1 + $bb111 + $bb1111 + $bb11111;
                    // Yi 
                    $yi1 = $bb11 - $min1;
                    //A2
                    $min2 = $bb2 + $bb222 + $bb2222 + $bb22222;
                    // Yi 
                    $yi2 = $bb22 - $min2;
                    //A3
                    $min3 = $bb33 + $bb333 + $bb3333 + $bb33333;
                    // Yi 
                    $yi3 = $bb33 - $min3;
                    //A4
                    $min4 = $bb4 + $bb444 + $bb4444 + $bb44444;
                    // Yi 
                    $yi4 = $bb44 - $min4;
                    //A5
                    $min5 = $bb5 + $bb555 + $bb5555 + $bb55555;
                    // Yi 
                    $yi5 = $bb22 - $min5;
                    //A6
                    $min6 = $bb6 + $bb666 + $bb6666 + $bb66666;
                    // Yi 
                    $yi6 = $bb66 - $min6;
                    //A7
                    $min7 = $bb7 + $bb777 + $bb7777 + $bb77777;
                    // Yi 
                    $yi7 = $bb77 - $min7;
                    //A8
                    $min8 = $bb8 + $bb888 + $bb8888 + $bb88888;
                    // Yi 
                    $yi8 = $bb88 - $min8;
                    //A9
                    $min9 = $bb9 + $bb999 + $bb9999 + $bb99999;
                    // Yi 
                    $yi9 = $bb99 - $min9;
                    //A0
                    $min0 = $bb0 + $bb000 + $bb0000 + $bb00000;
                    // Yi 
                    $yi0 = $bb00 - $min0;



                    ?>
                    <center>
                        <div class="container mt-4">
                            <div class="container">
                                <div class="well well-sm">
                                    <table class="table">
                                        <table class="table table-striped">
                                            <h3>Menentukan Nilai Rangking dari Perhitungan </h3>
                                            <tr class="success">
                                                <th>Alternatif</th>
                                                <th>MAX</th>
                                                <th>MIN </th>
                                                <th>NILAI</th>
                                                <th>RANGKING</th>
                                            </tr>
                                            <tr class="success">
                                                <th></th>
                                                <th>(C2)</th>
                                                <th>(C1+C3+C4+C5)</th>
                                                <th> YI = MAX - MIN</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A1</th>
                                                <th><?php echo $bb11 ?></th>
                                                <th><?php echo $min1 ?></th>
                                                <th><?php echo $yi1 ?></th>

                                                <th>1</th>
                                            </tr>
                                            <tr class="success">
                                                <th>A2</th>
                                                <th><?php echo $bb22 ?></th>
                                                <th><?php echo $min2 ?></th>
                                                <th><?php echo $yi2 ?></th>

                                                <th>8</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A3</th>
                                                <th><?php echo $bb33 ?></th>
                                                <th><?php echo $min3 ?></th>
                                                <th><?php echo $yi3 ?></th>

                                                <th>10</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A4</th>
                                                <th><?php echo $bb44 ?></th>
                                                <th><?php echo $min4 ?></th>
                                                <th><?php echo $yi4 ?></th>

                                                <th>6</th>

                                            <tr class="success">
                                                <th>A5</th>
                                                <th><?php echo $bb55 ?></th>
                                                <th><?php echo $min5 ?></th>
                                                <th><?php echo $yi5 ?></th>

                                                <th>4</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A6</th>
                                                <th><?php echo $bb66 ?></th>
                                                <th><?php echo $min6 ?></th>
                                                <th><?php echo $yi6 ?></th>

                                                <th>5</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A7</th>
                                                <th><?php echo $bb77 ?></th>
                                                <th><?php echo $min7 ?></th>
                                                <th><?php echo $yi7 ?></th>

                                                <th>2</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A8</th>
                                                <th><?php echo $bb88 ?></th>
                                                <th><?php echo $min8 ?></th>
                                                <th><?php echo $yi8 ?></th>

                                                <th>7</th>

                                            </tr>
                                            <tr class="success">
                                                <th>A9</th>
                                                <th><?php echo $bb99 ?></th>
                                                <th><?php echo $min9 ?></th>
                                                <th><?php echo $yi9 ?></th>

                                                <th>3</th>

                                            <tr class="success">
                                                <th>A0</th>
                                                <th><?php echo $bb00 ?></th>
                                                <th><?php echo $min0 ?></th>
                                                <th><?php echo $yi0 ?></th>

                                                <th>9</th>

                                            </tr>
                                        </table>
                                        <center>
                                            <h3> <i>Pilihan yang bantuan BPJS adalah A1,A7,A9,A5,A6</i> </h3>
                                            <div class="container">
                                                <ul class="pager">
                                                    <li><a href="index.php">Previous</a></li>
                                                    <li><a href="/spk/index.php">Next</a></li>
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