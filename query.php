<?php 

$db = mysqli_connect("localhost", "root", "", "maraca_buku");

function query ($query) {
  global $db;
  $lemari = mysqli_query($db, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($lemari)) {
    $rows[] = $row;
  }
  return $rows; 
}

function registrasi($data) {
  global $db;

  $email = strtolower(stripcslashes($data["email"]));
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($db, $data["password"]);

  $result = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
      echo "<script>
          alert ('username / email telah terdaftar')
          </script>";
      return false;
    }

        mysqli_query($db, "INSERT INTO user VALUES
               ('', '$email','$username', '$password')");
        return mysqli_affected_rows($db);
}

  
    // hash pasword



    // tambah
    function tambah($data) {
      global $db;

      $judul_buku = htmlspecialchars($data["judul"]);
      $penulis_buku = htmlspecialchars($data["penulis"]);
      $jenis_buku = htmlspecialchars($data["jenis"]);
      $ketersedian = htmlspecialchars($data["ketersedian"]);
      $deskripsi_buku = htmlspecialchars($data["deskripsi"]);
      $gambar_buku = htmlspecialchars($data["gambar"]);
      
      

      $query = "INSERT INTO buku 
                VALUES ( '', '$judul_buku', '$penulis_buku', '$jenis_buku', '$ketersedian', '$deskripsi_buku', '$gambar_buku')";
      mysqli_query($db, $query);

      return mysqli_affected_rows($db);

      
    }
  
  function cari ($keyword) {
    global $db;

    $query = "SELECT * FROM buku WHERE
    Judul LIKE '%$keyword%' OR Jenis LIKE '%$keyword%' OR Penulis LIKE '%$keyword%' ";

    return query($query);
  }


  


  function ubah ($data) {
  global $db;

  $id = htmlspecialchars ($data["id"]);
  $judulbuku = htmlspecialchars ($data["judulBuku"]);
  $jenisbuku = htmlspecialchars ($data["jenisBuku"]);
  $penulis = htmlspecialchars ($data["penulisBuku"]);
  $ketersedian = htmlspecialchars ($data["Ketersedian"]);
  $deskripsi = htmlspecialchars ($data["Deskripsi"]);
  $gambar = htmlspecialchars ($data["Gambar"]);

  $query = "UPDATE buku SET
             Judul = '$judulbuku',
             Penulis = '$penulis',
             Jenis= '$jenisbuku',
             Ketersedian = '$ketersedian',
             Deskripsi = '$deskripsi'
             Gambar = '$gambar'
             WHERE Id = $id
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
  }
?>