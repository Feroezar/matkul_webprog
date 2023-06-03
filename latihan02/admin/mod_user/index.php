<?php
if(!isset($_GET['aksi'])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "select * from mst_user") 
    or die(mysqli_error($koneksidb));
?>
<form action="#" method="get">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <div class="col-md">
          <a href="?modul=mod_user&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          <?php 
            while($row = mysqli_fetch_array($qdata)){
          ?>
            <tbody>
              <tr>
                <td><?= $row["username"] ?></td>
                <td><?= $row['pass_user']?></td>
                <td>
                <a href="?modul=mod_user&aksi=edit&id=<?= $row["id_user"]?>" class="btn btn-primary btn-xs mb-1">Edit</a>
                <a href="mod_user/proses.php?proses=delete&id=<?= $row["id_user"]?>" class="btn btn-primary btn-xs mb-1">Delete</a>
                </td>
              </tr>
            </tbody>
            <?php }?>
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
    $edit = mysqli_query($koneksidb, "select * from mst_user where id_user =".$_GET['id']."") 
      or die(mysqli_error($koneksidb));
    $data = mysqli_fetch_array($edit);
    // echo $data["nm_katagari"];
    $nama = $data["username"];
    $idnya = $_GET["id"];
    $exproses = "update";
  }
  else if($_GET["aksi"] == "add"){
    $nama="";
    $idnya = 0;
    $exproses = "insert";
  }
?>

<form action="mod_user/proses.php?proses=<?= $exproses;?>" method="post">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-3">
            <!-- id_user : -->
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="hidden" name="id_user" class="form-control" id="exampleInputPassword1" maxlength="11" value="<?= $idnya?>">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-3">
            username :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" name="user" class="form-control" id="" maxlength="16"  value=<?= $nama; ?>>
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-3">
            password :
          </div>
          <div class="col-md">
          <div class="mb-3">
            <input type="password" name="pass" class="form-control" id="">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="aktivasi">
            <label class="form-check-label">is_active</label>
          </div>
          <button type="reset" class="btn btn-secondary"><i class="bi bi-x-lg"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</form>
<?php } ?>