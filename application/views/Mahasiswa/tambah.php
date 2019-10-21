<div class="container">
      <div class="row-mt-3">
            <div class="col-md-6">
            <div class="card">
                  <div class="card-header">
                  From Tambah Data Mahasiswa
                  </div>
                  <div class="card-body">
                  <?= validation_errors(); ?>
            <form action="" method="post">
            <div class="form-group">
                  <label for="nrp">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                  <label for="nrp">NRP</label>
                  <input type="text" class="form-control" id="NRP" name="nrp">
            </div>
            <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="Email" name="email">
            </div>
            <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Teknik Pangan">Teknik Pangan</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Planologi">Teknik Planologi</option>
                  <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
            </div>
            <button type="submit" name="tambah" class="btn-primary float-right">Tambah Data</button> 
            </form>
            </div>
      
      </div>


</div>