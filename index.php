<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> POSTTEST 2 PEMROGRAMAN WEB </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
<script src="script.js" defer> </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<section id="darkmode">
    <section class="header">
        <nav>
            <div class="nav-links"> 
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="read.php">READ DATA</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><i class="bi bi-brightness-high-fill"></i></li>
                </ul>
            </div>
        </nav>

        <div id="darkmode" class="text-box">
            <h1 id="text">Selamat Datang di Website SMAN 1</h1>
            <p> SMA Negeri 1 merupakan Sekolah Menengah Atas bertaraf Internasional </p> <br>
            <a href="" class="info"> Kunjungi Kami Untuk Info Lebih Lanjut </a>
        </div> <br>

        <script>
            $(document).ready(function(){
                $("#text").on({
                    mouseenter:function(){
                        $(this).css("color","blue");
                    }
                })
            });

                $("#text").on({
                    mouseout:function(){
                        $(this).css("color","aliceblue");
                    }
                });
    
        </script>

        <div class="tabel"> 
            <div class="topik"> 
                <h3> PRESTASI SISWA </h3>
                <img id="juara" src="image/juara.jpeg">
                <script>
                    function foto1(){
                        document.getElementById('juara').src="image/juara2.jpg";
                    }
                    function foto2(){
                        document.getElementById('juara').src="image/juara.jpeg";
                    }
                    document.getElementById('juara').addEventListener('mouseover', foto1);
                    document.getElementById('juara').addEventListener('mouseout', foto2);
                </script>
                <p> Meraih Juara 1 Basket Putra Tingkat Kota </p>
            </div>
            <div class="topik"> 
                <h3> KEGIATAN EKSTRAKURIKULER </h3>
                <img id="eskul" src="image/eskul.jpg">
                <script>
                    function foto1(){
                        document.getElementById('eskul').src="image/eskul2.jpg";
                    }
                    function foto2(){
                        document.getElementById('eskul').src="image/eskul.jpg";
                    }
                    document.getElementById('eskul').addEventListener('mouseover', foto1);
                    document.getElementById('eskul').addEventListener('mouseout', foto2);
                </script>
                <p> SMA Negeri 1 memiliki total 12 Ekstrakurikuler aktif
                    <br> yang diikuti oleh seluruh siswa siswi SMA Negeri 1
                </p>
            </div>
            <div class="topik">
                <h3> UPACARA SENIN </h3>
                <img id="upacara" src="image/upacara.jpg">
                <script>
                    function foto1(){
                        document.getElementById('upacara').src="image/upacara2.jpg";
                    }
                    function foto2(){
                        document.getElementById('upacara').src="image/upacara.jpg";
                    }
                    document.getElementById('upacara').addEventListener('mouseover', foto1);
                    document.getElementById('upacara').addEventListener('mouseout', foto2);
                </script>
                <p> Upacara rutin dilakukan setiap hari Senin pada pukul
                    07.00 WITA untuk melatih kedisiplinan siswa siswi 
                    SMA Negeri 1 
                </p>
            </div>
        </div>
    </section>

    <section>
    <div class="footer" >
        <div class=""> 
        <h1> PENDAFTARAN SISWA/SISWI BARU </h1>
        <img src="image/daftar.png" height="250" width="300">
        <p> Pendaftaran Siswa/Siswi baru Tahun Ajaran 2023 SMAN 1 telah dibuka !!!</p>
        <a href="form.php" class="info"> KLIK UNTUK MENDAFTAR </a>
        </div>
        </div>
    </section>



    
    <!-- <section class="form">
        <div>
            <center>
            <h3> FORM DATA SISWA </h3>
            <form method="POST" action="form.php">
                <table>
                    <tr>
                        <td> Nama </td>
                        <td> <input type="text" name="nama" placeholder="Masukkan Nama"></td>
                    </tr>
                    <tr>
                        <td> Nomor Induk Siswa </td>
                        <td> <input type="text" name="nis" placeholder="Masukkan Nis"></td>
                    </tr>
                    <tr>
                        <td> Tanggal Lahir </td>
                        <td> <input type="date" name="tgllahir"></td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin </td>
                        <td> <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                             <input type="radio" name="jk" value="Perempuan"> Perempuan </td>
                    </tr>
                    <tr>
                        <td> Kelas </td>
                        <td> <select name="kelas" id="">
                             <option value="">Pilih Kelas</option>
                             <option value="10 IPA 1">10 IPA 1</option>
                             <option value="10 IPS 1">10 IPS 1</option>
                             <option value="11 IPA 1">11 IPA 1</option>
                             <option value="11 IPS 1">11 IPS 1</option>
                             <option value="12 IPA 1">12 IPA 1</option>
                             <option value="12 IPS 1">12 IPS 1</option>
                        </select> ></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="submit" value="submit"> Kirim </button>
                        </td>
                    </tr>
                </table>
            </form>
            </center>
        </div>

    </section> -->

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>