<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div
      class="modal fade"
      id="ubahModal"
      tabindex="-1"
      aria-labelledby="ubahModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ubahModalLabel">Ubah Data Buku</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- Form Pengubahan Buku -->
            <form id="ubahForm" action="" method="POST">
              <div class="mb-3">
                <label for="judulBuku" class="form-label">Judul Buku</label>
                <input
                  type="text"
                  class="form-control"
                  id="judulBuku"
                  name="judulBuku"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="penulisBuku" class="form-label">Penulis</label>
                <input
                  type="text"
                  class="form-control"
                  id="penulisBuku"
                  name="penulisBuku"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="jenisBuku" class="form-label">Jenis Buku</label>
                <input
                  type="text"
                  class="form-control"
                  id="jenisBuku"
                  name="jenisBuku"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="stokBuku" class="form-label">Stok</label>
                <input
                  type="number"
                  class="form-control"
                  id="stokBuku"
                  name="stokBuku"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="deskripsiBuku" class="form-label">Deskripsi</label>
                <textarea
                  class="form-control"
                  id="deskripsiBuku"
                  name="Deskripsi"
                  rows="3"
                  required
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="gambarBuku" class="form-label">Gambar Buku</label>
                <input
                  type="file"
                  class="form-control"
                  id="gambarBuku"
                  name="Gambar"
                />
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Tutup
                </button>
                <button type="submit" name="submit" class="btn btn-primary">
                  Simpan Perubahan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      function setFormData(id, judul, penulis, jenis, stok, deskripsi) {
        // Isi data ke dalam form modal
        document.getElementById("judulBuku").value = judul;
        document.getElementById("penulisBuku").value = penulis;
        document.getElementById("jenisBuku").value = jenis;
        document.getElementById("stokBuku").value = stok;
        document.getElementById("deskripsiBuku").value = deskripsi;
        // Jika Anda ingin menyertakan ID untuk update nanti
        const form = document.getElementById("ubahForm");
        const inputId = document.createElement("input");
        inputId.type = "hidden";
        inputId.name = "id";
        inputId.value = id;
        form.appendChild(inputId);
      }
    </script>
  </body>
</html>
