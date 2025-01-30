<?php
require '../query.php';

if (isset($_POST["tombolubah"])) {
    global $db;

  $id = intval($_POST['id']);
  $ubah = mysqli_query($db, "UPDATE buku SET
             Judul = '$_POST[judulBuku]',
             Penulis = '$_POST[penulisBuku]',
             Jenis = '$_POST[jenisBuku]',
             Ketersedian = '$_POST[ketersedianubah]',
             Deskripsi = '$_POST[Deskripsiubah]',
             Gambar = '$_POST[gambarubah]'
             WHERE Id = $id
            ");

  if( $ubah) {
  echo "
  <script>
    alert ('Data berhasil diubah');
    document.location.href = 'riwayat.php';
  </script>
  ";
 } else {
  echo "
  <script>
    alert ('Data gagal diubah');
    document.location.href = 'index.php';
  </script>
  ";
 }
}

?>