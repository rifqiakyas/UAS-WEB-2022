<?= $this->extend('template') ?>

<?= $this->section('content') ?>

  <!-- Page Header Start -->
  <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Tambah </h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href=<?=site_url('/')?>>Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Tambah data</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<div class="container-fluid pt-5">
<form class="row g-3 style" enctype="multipart/form-data" method="post" action="<?=site_url('tambah')?>">
<div class="col-md-5 ml-1">
    <label for="namabarang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" name="namabarang">
  </div>
  <div class="col-md-6">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
  </div>
  <div class="input-group col-5 mt-5 mb-4 ml-1">
  <span class="input-group-text">Rp.</span>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="harga">
</div>
<div class="col-md-6 mt-3">
    <label for="stok" class="form-label">Stok</label>
    <input type="number" class="form-control" id="stok" name=stok>
  </div>
  
  <div class="mb-3 mt-3 ml-4">
    <input type="file" class="form-control" aria-label="file example" name="gambar"required>
    <div class="invalid-feedback">Masukan Gambar jpg/png</div>
  </div>
  <div class="col-12 ml-2">
    <button type="submit" class="btn btn-primary">Tambah</button>
  </div>
</form>
</div>
<?= $this->endSection() ?>