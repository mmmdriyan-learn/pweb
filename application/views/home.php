<style>
  body {
    background-image: url('assets/img/bg.jpg');
    background-size: cover;
  }
  h1 {
    color:white;
  }
  .d-flex {
    background-color: white;
    opacity: 70%;
  }
  
</style>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Galaxy Gaming</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-primary" href="<?=base_url('pweb/tambah')?>">Tambah Data</a>
  </nav>
  <a class="btn btn-outline-danger" href="<?=base_url('pweb/logout')?>">Sign Out</a>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0"><strong>Data Barang Elektronik</strong></h1>
  <?php if($this->session->flashdata('pesan') == "Ditambah"): ?>
    <div class="alert alert-success" role="alert"> 
      Data Berhasil Ditambah! 
    </div>
  
  <?php elseif($this->session->flashdata('pesan') == "Diubah"): ?>
    <div class="alert alert-success" role="alert"> 
      Data Berhasil Diubah! 
    </div>

  <?php elseif($this->session->flashdata('pesan') == "Dihapus"): ?>
    <div class="alert alert-success" role="alert"> 
      Data Berhasil Dihapus! 
    </div>
  <?php endif ?>
</div>

<div class="container">
  <table class="table table-bordered table-hover table-light table-striped">
    <thead class="thead-dark align-middle">
      <tr>
        <th class="align-middle text-center">No.</th>
        <th class="align-middle text-center">Kode Barang</th>
        <th class="align-middle text-center">Nama Barang</th>
        <th class="align-middle text-center">Stok </th>
        <th class="align-middle text-center">Harga</th>
        <th class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      $no = 1;
      foreach ($barang as $data) :?>
      <tr>
          <th class="align-middle text-center"><?=$no++?></th>
          <td class="align-middle text-center"><?=$data['kd_barang']?></td>
          <td class="align-middle"><?=$data['nama_barang']?></td>
          <td class="align-middle text-center"><?=$data['stok']?></td>
          <td class="align-middle text-center"><?=$data['harga']?></td>
          <td class="align-middle text-center">
            <a href="<?=base_url('pweb/edit/' .$data['kd_barang']) ?>" class="align-middle btn badge-pill btn-success shadow">Edit</a>
            <a href="<?=base_url('pweb/hapus/' .$data['kd_barang']) ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" 
            class="align-middle btn badge-pill btn-danger shadow">Hapus</a>
          </td>
        </tr>
        <?php endforeach?>
    </tbody>
  </table>
</div>