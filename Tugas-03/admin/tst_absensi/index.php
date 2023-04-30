<?php
  if(!isset($_GET['aksi'])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "select * from tst_absensi") 
    or die(mysqli_error($koneksidb));
?>
<form action="tst_absensi/proses.php" method="get">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <div class="col-md">
            <a href="?modul=tst_absensi&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Induk Mahasiswa</th>
                <th scope="col">Nama</th>
                <th scope="col">Hadir</th>
                <th scope="col">Sakit</th>
                <th scope="col">Izin</th>
                <th scope="col">Alpha</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
      <?php 
        while($row = mysqli_fetch_array($qdata)){
      ?>
            <tbody>
              <tr>
                <td scope="row"><?php echo $row["No"]?></td>
                <td><?php echo $row["NIM"]?></td>
                <td><?php echo $row["Nama"]?></td>
                <td><?php echo $row["Hadir"]?></td>
                <td><?php echo $row["Sakit"]?></td>
                <td><?php echo $row["Izin"]?></td>
                <td><?php echo $row["Alpha"]?></td>
                <td>
                <a href="" class="btn btn-primary btn-xs mb-1">Edit</a>
                <a href="?aksi=delete&nim=<?php echo $row["NIM"]?>" class="btn btn-primary btn-xs mb-1">Delete</a>
                </td>
              </tr>
            </tbody>
      <?php } ?>
          </table>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
</form>

<?php } 
else if(isset($_GET['aksi'])){
?>
<form action="tst_absensi/proses.php?aksi=insert" method="post">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            No Induk Mahasiswa :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="number" class="form-control" name="num_nim" id="numnim">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Nama :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" name="txt_nama" id="txtnama">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Hadir :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="number" class="form-control" name="num_hadir" id="numhadir">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Sakit :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="number" class="form-control" name="num_sakit" id="numsakit">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Izin :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="number" class="form-control" name="num_izin" id="numizin">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Alpha :
          </div>
          <div class="col-md">
          <div class="mb-3">
            <input type="number" class="form-control" name="num_alpha" id="numalpha">
          </div>
          <button type="reset" class="btn btn-secondary"><i class="bi bi-x-lg"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</form>
<?php } ?>