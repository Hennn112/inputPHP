<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai</title>
    <link rel="stylesheet" href="nilai.css">
    
</head>
<body>
    <form action="#" method="get">
        <center>
    <div class="nama">
            <h2>NAMA</h2>
            <input type="text" name="nama" required placeholder="nama">
        </div>

        <div class="nila">
            <h2>NILAI</h2>

            <input type="number" name="mtk" required placeholder="Matematika"><br></br>
            <input type="number" name="indo" required placeholder = "Bhs Indonesia"><br></br>
            <input type="number" name="pai" required placeholder = "PAI"><br></br>
            <input type="number" name="ipa" required placeholder = "IPA"><br></br>
            <input type="number" name="inggris" required placeholder ="Inggris"><br></br>
            <input type="number" name="pkn" required placeholder ="PKN"> <br></br>

            <input type="submit"><br>
        </div>
    </form>

    <?php
    include "koneksi.php";

    if(isset($_GET['nama']) && isset($_GET['mtk']) && isset($_GET['indo']) && isset($_GET['pai']) && isset($_GET['ipa']) && isset($_GET['inggris']) && isset($_GET['pkn'])) {
        $nama = $_GET['nama'];
        $mtk = $_GET['mtk'];
        $indo = $_GET['indo']; 
        $pai = $_GET['pai'];
        $ipa = $_GET['ipa'];
        $inggris = $_GET['inggris'];
        $pkn = $_GET['pkn'];
        $total = $mtk + $indo + $pai + $ipa + $inggris + $pkn;
        $max = max($mtk, $indo, $pai, $ipa, $inggris, $pkn);
        $min = min($mtk, $indo, $pai, $ipa, $inggris, $pkn);
        $rata = ($mtk + $indo + $pai + $ipa + $inggris + $pkn) / 6;

        $sql = "INSERT INTO `nilaisiswa`(`mtk`, `indo`, `pai`, `ipa`, `inggris`, `pkn`, `nama`) VALUES ('$mtk', '$indo', '$pai', '$ipa', '$inggris', '$pkn', '$nama')";
        $hasil = mysqli_query($conn, $sql);

        if ($hasil) {
            echo "Berhasil";
            echo "<br>";
        } else {
            echo "Gagal";
            echo "<br>";
        }

        if ($rata >= 90) {
            $grade = "nilai A";
        } elseif ($rata > 80) {
            $grade = "nilai B";
        } elseif ($rata > 70) {
            $grade = "nilai C";
        } elseif ($rata > 0) {
            $grade = "te lulus";
        }

        echo "Nama Anda: " . $nama;
        echo "<br>";

        echo "NILAI TOTAL: " . $total;
        echo "<br>";

        echo "NILAI TERTINGGI: " . $max;
        echo "<br>"; 

        echo "NILAI TERENDAH: " . $min;
        echo "<br>"; 

        echo "NILAI RATA-RATA: " . $rata;
        echo "<br>";

        echo "GRADE NIALI ADALAH: " . $grade;
        echo "<br>";
        
    }
    ?>
    <a href="tamble.php">lihat data</a> 
    </center>
</body>
</html>
