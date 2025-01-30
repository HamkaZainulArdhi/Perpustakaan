<?php 
require '../query.php';
$buku = query ("SELECT * FROM buku ORDER BY Id DESC");
$no = 1;


// // ambil data buat modal
// $tampil = mysqli_query($db, "SELECT * FROM buku ORDER BY Id DESC" );

// pencarian
if (isset($_POST["cari"])) {
  $buku = cari($_POST["keyword"]);

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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
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
        background: url("/maraca/img/perpus.jpg") no-repeat center/cover;
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
        background-color: #ffffff;
      }

      .namakolom {
        font-size: 1em;
        text-align: center;
      }

      .search {
        margin-left: 30rem;
      }

      tbody td:not(.deskripsi){
        text-align: center;
      }

      tbody td {
        font-weight: 500;
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
          Masukan Buku
        </a>
        <a href="riwayat.php" class="d-flex align-items-center gap-2">
          <i class="bi bi-journal-check"></i>
          Riwayat Masukan
        </a>
      </div>

      <div class="content">
        <div class="d-flex">
          <h2 class="text-black text-start">Data Buku</h2>
          <form class="d-flex mb-4 search" role="search" method="post">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
              name="keyword"
            />
            <button class="btn btn-outline-success" type="submit" name="cari">
              Search
            </button>
          </form>
        </div>
        <div class="table-responsive rounded-top-4">
          <table class="table table-striped-columns">
            <thead class="table-danger">
              <tr class="text-white namakolom">
                <th>No.</th>
                <th>Foto Buku</th>
                <th style="width: 120px">Penulis</th>
                <th>Judul Buku</th>
                <th>Jenis</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <?php foreach ($buku as $row) : ?>
            <tbody class="isikolom border-bottom border-dark-subtle">
              <tr>
                <td><?= $no++ ?> </td>
                <td>
                  <img
                    src="/MARACA/img/<?= $row["Gambar"]; ?>"
                    alt="Foto Buku"
                    class="rounded"
                    style="width: 100px; height: auto"
                  />
                </td>
                <td><?= $row["Penulis"]; ?></td>
                <td><?= $row["Judul"]; ?></td>
                <td><?= $row["Jenis"]; ?></td>
                <td><?= $row["Ketersedian"]; ?></td>
                <td class="deskripsi"><?= $row["Deskripsi"]; ?></td>
                <td class="aksi">
                  <div>
                    <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modalubah<?= $row["Id"]?>" >Ubah</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </div>
                </td>
              </tr>
 <div class="modal fade" id="modalubah<?= $row["Id"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="ubah.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $row["Id"]?>">
          
          <div class="mb-3">
            <label for="judulBuku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judulBuku" name="judulBuku" value="<?= $row['Judul']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="penulisBuku" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulisBuku" name="penulisBuku" value="<?= $row['Penulis']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="jenisBuku" class="form-label">Jenis Buku</label>
            <input type="text" class="form-control" id="jenisBuku" name="jenisBuku" value="<?= $row['Jenis']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="stokBuku" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stokBuku" name="ketersedianubah" value="<?= $row['Ketersedian']; ?>" required>
          </div>

          <div class="mb-3">
            <label for="deskripsiBuku" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsiBuku" name="Deskripsiubah" rows="3" required><?= $row['Deskripsi']; ?></textarea>
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambarubah" value="<?= $row['Gambar']; ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="sumbit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="tombolubah">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>
            </tbody>
            <?php endforeach ?>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
