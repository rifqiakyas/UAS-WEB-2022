<?= $this->extend('template') ?>

<?= $this->section('content') ?>

  <!-- Page Header Start -->
  <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">List Barang</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href=<?=site_url('/')?>>Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">List Barang</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


<h5 style="padding-left:20px;"><a href="<?=site_url('tambahdata')?>">tambah data</a></h5>
<div class="container-fluid pt-5">
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">namabarang</th>
      <th scope="col">deskripsi</th>
      <th scope="col">Harga</th>
      <th scope="col">stok</th>
      <th scope="col">image</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($models as $no=>$row ) : ?>
    <tr>
      <th scope="row"><?=$no+1?></th>
      <td><?=$row['namabarang'];?></td>
      <td><?=$row['deskripsi'];?></td>
      <td><?=$row['harga'];?></td>
      <td><?=$row['stok'];?></td>
      <td><img src="assets/img/<?=$row['gambar'];?>" style="width:200px;height:150px;"></td>
      <td><a href="<?=site_url('hapus/'.$row['id_barang'])?>">hapus</a>|<a href="<?=site_url('updatedata/'.$row['id_barang'])?>">update</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<?= $this->endSection() ?>