<?php

$server = mysqli_connect("localhost", "root", "", "nilai");

$sql = "SELECT * FROM nilaisiswa";
$query = mysqli_query($server, $sql);


?>  

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="tamble.css">
</head>
    <body>
      <center><h2>DAFTAR NILAI</h2></center>
      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>MTK</th>
            <th>INDO</th>
            <th>PAI</th>
            <th>IPA</th>
            <th>INGG</th>
            <th>PKN</th>
            <th>AKSI</th>
          </tr>             
        </thead>

        <tbody>
          <?php if(mysqli_num_rows($query) > 0) : ?>
            <?php while($data = mysqli_fetch_assoc($query)): ?>
              <tr>
                <td><?= $data["nama"];?></td>
                <td><?= $data["mtk"];?></td>
                <td><?= $data["indo"];?></td>
                <td><?= $data["pai"];?></td>
                <td><?= $data["ipa"];?></td>
                <td><?= $data["inggris"];?></td>
                <td><?= $data["pkn"];?></td>
                <td><a href="hapus.php?id= <?php echo $data['id'] ?>" class="btn btn-danger btn-sm">Hapus</a></td>
              </tr>
            <?php endwhile;?>
          <?php endif;?>    
          <tr>
            <th><a href="nilai.php">Kembali ke hal sebelumnya</a></th>
          </tr>
        </tbody>
      </table>
    </body>
</html>