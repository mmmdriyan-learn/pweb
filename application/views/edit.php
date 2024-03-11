<style>
  body {
    background-image: url('../../assets/img/bg.jpg');
    background-size: cover;
  }
  .d-flex {
    background-color:white;
    opacity: 70%;
  }
</style>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Galaxy Gaming</h5>
	<nav class="my-2 my-md-0 mr-md-3">
	<a class="btn btn-outline-primary" href="<?=base_url('pweb')?>">Home</a>
	</nav>
	<a class="btn btn-outline-danger" href="<?=base_url('pweb/logout')?>">Sign Out</a>
</div>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <div class="card bg-light my-5">
        <div class="card-header text-center">Edit Data</div>
        <div class="card-body">
          <form action="" method="post" class="needs-validation" novalidate>
            <input type="hidden" name="kd_barang" value="<?= $barang['kd_barang'] ?>">
            <div class="form-group">
              <label for="kd_barang">Kode Barang</label>
              <input type="kd_barang" class="form-control" name="kd_barang" id="kd_barang" placeholder="Masukan kode barang" autocomplete="off" required value="<?= $barang['kd_barang'] ?>">
              <div class="invalid-feedback">
                Anda belum memasukan kode.
              </div>
            </div>
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input type="nama_barang" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukan nama barang" autocomplete="off" required value="<?= $barang['nama_barang'] ?>">
              <div class="invalid-feedback">
                Anda belum memasukan nama barang.
              </div>
            </div>
            <div class="form-group">
              <label for="stok">Stok</label>
              <input type="stok" class="form-control" name="stok" id="stok" placeholder="Masukan stok" autocomplete="off" required value="<?= $barang['stok'] ?>">
              <div class="invalid-feedback">
                Anda belum memasukan stok.
              </div>
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="harga" class="form-control" name="harga" id="harga" placeholder="Masukan harga" autocomplete="off" required value="<?= $barang['harga'] ?>">
              <div class="invalid-feedback">
                Anda belum memasukan harga.
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary text-center px-3 py-2" name="edit">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>