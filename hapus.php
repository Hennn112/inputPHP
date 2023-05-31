<?php
    $data = $_GET['id'];
    $server = mysqli_connect("localhost","root","","nilai");
    echo $data; 
 
    $sql = "DELETE FROM nilaisiswa WHERE id = '$data'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='tamble.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }

  ?>  