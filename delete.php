<?php
     include('koneksi.php');

   if(isset($_GET['nis_posttest5'])){
      $delete = mysqli_query($koneksi, "DELETE FROM students WHERE nis= '".$_GET['nis_posttest5']."'");

      if($delete){
         ?>
            <script>
            alert("data berhasil dihapus");
            window.location=('read.php');
            </script>
         <?php
      }
   }
?>