<?php 
   $hostname = "localhost";
   $user = "root";
   $password = "";
   $database_name = "posttest6";

   // $conn = mysqli_connect($hostname,$user,$password,$database_name);

   // if(!$conn) {
   //    die("gagal terhubung ke database". mysqli_connect_error());
   // }
   //$koneksi = mysqli_connect("localhost", "root", "root", "posttest6")or die(mysqli_error($koneksi));

   function query($query){
      global $koneksi;
      $result = mysqli_query($koneksi, $query);
      $rows = [];
      while( $row = mysqli_fetch_assoc($result)){
         $rows[] =$row;
      }
      return $rows;
   }

   $koneksi = mysqli_connect($hostname, $user, $password, $database_name)or die(mysqli_error($koneksi));


   function registrasi($data){
      global $koneksi;

      $username = strtolower(stripslashes($data["username"]));
      $password = mysqli_real_escape_string($koneksi, $data["password"]);
      $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

      //cek username sudah ada atau belum
      $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

      if( mysqli_fetch_assoc($result)){
        echo"<script>
        alert('Username sudah terdaftar!');
        </script>";
        return false;
      }

      if($password !== $password2){
        echo"<script>
        alert('Konfirmasi password tidak sesuai!');
        </script>";
        return false;
      }

      //enkripsi password
      $password = password_hash($password, PASSWORD_DEFAULT);

      //tambahkan user baru ke database
      mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password')");

      return mysqli_affected_rows($koneksi);


   }

function cari($keyword){
   $query = "SELECT * FROM students WHERE nama = '$keyword'";

   return query($query);
}