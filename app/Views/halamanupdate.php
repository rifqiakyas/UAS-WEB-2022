<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container-fluid pt-5">
<form class="row g-3" enctype="multipart/form-data" method="post" action="<?=site_url('update/'.$models['id_barang'])?>">
  <div class="col-md-5 ml-1">
    <label for="namabarang" class="form-label">nama barang</label>
    <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?=$models['namabarang']?>">
  </div>
  <div class="col-md-6">
    <label for="deskripsi" class="form-label">deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?=$models['deskripsi']?>">
  </div>
  <div class="input-group col-5 mt-5 mb-4 ml-1">
  <span class="input-group-text">Rp.</span>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="harga" value="<?=$models['harga']?>">
</div>
  <div class="col-md-6 mt-3">
    <label for="stok" class="form-label">stok</label>
    <input type="number" class="form-control" id="stok" name=stok value="<?=$models['stok']?>">
  </div>
  <div class="mb-3 mt-3 ml-4">
  <img src="<?=base_url('assets/img/'.$models['gambar'])?>" style="width:200px;height:150px;">
    <input type="file" class="form-control" aria-label="file example" name="gambarbaru" >
  </div>
  <input type="hidden" class="form-control" aria-label="file example" name="gambar" value="<?=$models['gambar']?>" required>
  <div class="col-12 ml-2">
    <button type="submit" class="btn btn-primary">update</button>
  </div>
</form>
</div>
<?= $this->endSection() ?>