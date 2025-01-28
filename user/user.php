<?php 
require '../query.php';

$error = "";

if (isset($_POST["simpan"])){
  if (!isset($_POST['agree'])) {
        $error = "Anda harus mencentang persetujuan sebelum menyimpan.";
  } else {
    if (tambah($_POST) > 0) {
  echo "
  <script>
    alert ('Data berhasil di tambahkan');
    document.location.href = 'pertemuan8.php';
  </script>
  ";
 } else {
  echo "
  <script>
    alert ('Data berhasil di tambahkan');
    document.location.href = 'pertemuan8.php';
  </script>
  ";
 }


}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Quicksand", sans-serif;
        margin: 0;
        font-weight: 600;
        background-color: #ecf0f5;
      }

      /* Gambar latar belakang */
      .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 200px; /* Tinggi gambar di atas */
        z-index: -1;
        background: url("/MARACA/img/perpus.jpg") no-repeat center/cover;
      }

      .sidebar {
        width: 250px;
        height: calc(90vh + 50px); /* Sidebar lebih tinggi dari viewport */
        margin-top: 5rem;
        position: sticky;
        top: 0;
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
        border-radius: 8px;
        z-index: 1;
      }

      .sidebar .logo {
        text-align: center;
        margin-bottom: 20px;
      }

      .sidebar .logo img {
        width: 10rem;
      }

      .sidebar .user-info {
        text-align: center;
        margin-bottom: 20px;
      }

      .sidebar .user-info small {
        display: block;
        color: gray;
      }

      .sidebar a {
        display: block;
        color: #000;
        text-decoration: none;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
      }

      .sidebar a:hover {
        background-color: #e9ecef;
      }

      .content {
        margin: 20px;
        margin-top: 10rem;
        width: 62.3rem;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        z-index: 2;
      }

      .form-control {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        box-shadow: none;
        outline: none;
      }

      .form-control:focus {
        border-bottom: 2px solid #ff0800;
        outline: none;
        box-shadow: none;
      }
    </style>
  </head>
  <body>
    <!-- Gambar Latar Belakang -->
    <div class="background-image"></div>

    <div class="d-flex">
      <div class="sidebar">
        <div class="logo">
          <img src="/maraca/img/logo.png" alt="Logo" />
        </div>
        <div class="user-info">
          <strong>MARACA BUKU</strong>
          <small>Komunitas Literasi Desa Bangbayang</small>
        </div>
        <h5 class="text-danger">Admin Menu</h5>
        <a href="#" class="d-flex align-items-center gap-2">
          <i class="bi bi-houses"></i>Beranda
        </a>
        <a href="user.php" class="d-flex align-items-center gap-2">
          <i class="bi bi-folder-plus"></i>
          Masukan TAK
        </a>
        <a href="riwayat.php" class="d-flex align-items-center gap-2">
          <i class="bi bi-journal-check"></i>
          Riwayat Masukan
        </a>
      </div>

      <div class="content border">
        <h3 class="mb-4">Formulir Masukan</h3>
        <form action="" method="post">
          <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input
              type="text"
              class="form-control"
              name="judul"
              placeholder="Tulis Judul Buku"
            />
          </div>

          <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input
              type="text"
              class="form-control"
              placeholder="Tulis Penulis"
              name="penulis"
            />
          </div>

          <div class="row">
            <!-- <div class="col-md-4">
              <label for="start-date" class="form-label">Jenis Buku</label>
              <input type="date" class="form-control" id="start-date" />
            </div>
            <div class="col-md-4">
              <label for="end-date" class="form-label">Tanggal Selesai</label>
              <input type="date" class="form-control" id="end-date" />
            </div> -->
            <div class="col-md-6">
              <label class="form-label">Jenis Buku</label>
              <select class="form-select" name="jenis">
                <option selected>Jenis Buku</option>
                <option value="Novel">Novel</option>
                <option value="Komik">Komik</option>
                <option value="Self Improvment">Self Improvment</option>
                <option value="Buku anak">Buku anak</option>
                <option value="Filsafat">Filsafat</option>
                <option value="Sejarah">Sejarah</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label"
                >Unggah Foto Buku</label
              >
              <input class="form-control" type="text" name="gambar" />
              <small class="form-text text-muted"
                >File: .jpg, .png, .pdf dengan maksimal 2 MB.</small
              >
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6">
              <label class="form-label">Ketersedian</label>
              <select class="form-select" name="ketersedian">
                <option selected>Ketersedian</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>

          <div class="mb-3 mt-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
          </div>

          <!-- <div class="mb-3">
            <label for="organizer" class="form-label">Penyelenggara</label>
            <input type="text" class="form-control" id="organizer" />
          </div> -->

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="agree" />
            <label class="form-check-label">
              Dengan ini menyatakan bahwa data yang saya unggah sudah sesuai.
              Apabila terdapat kesalahan, saya siap mendapatkan sanksi.
            </label>
            <?php if ($error) : ?>
             <div style="color: red;"><?php echo $error; ?></div>
            <?php endif; ?>
          </div>

          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
          <button type="reset" class="btn btn-secondary" name="atur ulang">Atur Ulang</button>
        </form>
      </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
