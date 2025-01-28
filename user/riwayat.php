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
        background-color: #ffffff;
        z-index: 2;
      }

      .namakolom {
        font-size: 1em;
        text-align: center;
      }

      .search {
        margin-left: 30rem;
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

      <div class="content">
        <div class="d-flex">
          <h2 class="text-black text-start">Data Buku</h2>
          <form class="d-flex mb-4 search" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
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
            <tbody class="isikolom border-bottom border-dark-subtle">
              <tr>
                <td>1</td>
                <td>
                  <img
                    src="/img/logo.png"
                    alt="Foto Buku"
                    class="rounded"
                    style="width: 100px; height: auto"
                  />
                </td>
                <td>Harry Potter</td>
                <td>Harry Potter and the Philosopher's Stone</td>
                <td>Fiksi</td>
                <td>12</td>
                <td>Buku tentang dunia sihir yang penuh petualangan.</td>
                <td>
                  <div class="d-flex mt-2">
                    <button class="btn btn-sm btn-warning me-2">Ubah</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="isikolom">
              <tr>
                <td>1</td>
                <td>
                  <img
                    src="/img/logo.png"
                    alt="Foto Buku"
                    class="rounded"
                    style="width: 100px; height: auto"
                  />
                </td>
                <td>Harry Potter</td>
                <td>Harry Potter and the Philosopher's Stone</td>
                <td>Fiksi</td>
                <td>12</td>
                <td>Buku tentang dunia sihir yang penuh petualangan.</td>
                <td>
                  <div class="d-flex mt-2">
                    <button class="btn btn-sm btn-warning me-2">Ubah</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="belajar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
