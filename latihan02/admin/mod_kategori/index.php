<?php
if(!isset($_GET['aksi'])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "select * from mst_kategori") 
    or die(mysqli_error($koneksidb));
?>
<form action="#" method="get">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <div class="col-md">
            <a href="?modul=mod_kategori&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID Kategori</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
      <?php 
      $no = 1;
        while($row = mysqli_fetch_array($qdata)){
      ?>
            <tbody>
              <tr>
                <td><?php echo $row["id_kategori"]?></td>
                <td><?php echo $row["nm_kategori"]?></td>
                <td>
                <a href="?modul=mod_kategori&aksi=edit&id=<?php echo $row["id_kategori"]?>" class="btn btn-primary btn-xs mb-1">Edit</a>
                <a href="mod_kategori/proses.php?proses=delete&id=<?= $row["id_kategori"]?>" class="btn btn-primary btn-xs mb-1">Delete</a>
                </td>
              </tr>
            </tbody>
      <?php $no++;} ?>
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
  
    if($_GET['aksi'] == "edit"){
      $edit = mysqli_query($koneksidb, "select * from mst_kategori where id_kategori =".$_GET['id']."") 
        or die(mysqli_error($koneksidb));
      $data = mysqli_fetch_array($edit);
      // echo $data["nm_kategori"];
      $nama = $data["nm_kategori"];
      $idnya = $_GET["id"];
      $exproses = "update";
    }
    else if($_GET["aksi"] == "add"){
      $nama="";
      $idnya = 0;
      $exproses = "insert";
    }

?>
<form action="mod_kategori/proses.php?proses=<?= $exproses;?>" method="post">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Nama Kategori :
          </div>
          <div class="col-md">
          <div class="mb-3">
            <input type="hidden" name="txt_id" id="txt_id" value="<?= $idnya; ?>">
            <input type="text" class="form-control" name="txt_nama" id="txtnama" value=<?php echo $nama; ?>>
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