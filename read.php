<?php 
   include('koneksi.php');

   //$read = mysqli_query($koneksi, "SELECT * FROM students");

    // if( isset($_POST["cari"])){
    //     $read = mysqli_query($koneksi, "SELECT * FROM students WHERE nama LIKE '%".$_POST['keyword']."'");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <section class="form">
<center>
    <form action="" method="POST" class="search">
        <input type="text" placeholder="Cari Nama Siswa/i" name="cari">
        <button type="submit" name="cari"><img src="image/search.png"></button>
    </form>
    <a href="form.php" style="margin-left: -790px;">create</a>
    <table border="1">
            <tr colspan="2" style="background-color: red;">
                    <td align="center" colspan="8"> <u> <b> DATA SISWA/I BARU </u></b></td>
            </tr>
            <tr>
                <th>No Induk Siswa</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Foto Siswa</th>
                <th>Tanggal & Waktu</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $read = mysqli_query($koneksi, "SELECT * FROM students");

            if( isset($_POST["cari"])){
                var_dump($_POST["cari"]);
                die();
                $read = mysqli_query($koneksi, "SELECT * FROM students WHERE nama LIKE '%".$_POST['cari']."%'");
            }

            if(mysqli_num_rows($read) > 0){
               while($row = mysqli_fetch_array($read)){
                  ?>
                     <tr>
                        <td> <?php echo $row['nis'] ?> </td>
                        <td> <?php echo $row['nama'] ?></td>
                        <td> <?php echo $row['tgl_lahir'] ?> </td>
                        <td> <?php echo $row['jenis_kelamin'] ?> </td>
                        <td> <?php echo $row['kelas'] ?> </td>
                        <td><img src="<?=$row['gambar'] ?>" width="80px" alt=""></td>
                        <td> <?php echo $row['tgl_waktu'] ?> </td>
                        <td>
                           <a href="update.php?nis_posttest5=<?php echo $row['nis']; ?>" class="btn update">Update</a>
                           <a href="delete.php?nis_posttest5=<?php echo $row['nis'];?>" class="btn delete">Delete</a>
                        </td>
                     </tr>
                  <?php
               }
            }
         ?>
           
        </table>
</center>
    </section>

    <section class="footer">
        <h1> SMA NEGERI 1 </h1>
        <p> Jl. DI Panjaitan Gang Ketemu 3 Rt.01 No. 10. Kota Baru, Indonesia 
            <br>
            No. Telepon : 0548-99999 | E-mail : sman1@gmail.com
        </p>
    </section>

    <section class="bio">
        <div class="saya">
        <img src="image/sapaya.jpg">
        <div class="teks">
        <h3> Tentang Saya </h3>
        <p>Nama : Sarah Syifani 
            <br>
            NIM : 2109106131
            <br>
            Tempat Tanggal Lahir : Samarinda, 1 Oktober 2003
            <br>
            Instagram : @sarhsyfn_
            <br>
            E-mail : sarahsyifa34@gmail.com
        </p>
    </div>
</div>
    </section>
</section>
</body>
</html>