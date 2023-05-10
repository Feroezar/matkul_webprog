<?php
if(!isset($_GET['aksi'])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "SELECT a.*, nm_katagari FROM mst_blog AS a INNER JOIN mst_katagori AS b ON a.id_katagori = b.id_katagori ") 
    or die(mysqli_error($koneksidb));
?>
<form action="#" method="get">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-11">
        <div class="mb-3 row">
          <div class="col-md">
            <a href="?modul=mod_blog&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Judul</th>
                <th scope="col">File Gambar</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Penulis</th>
                <th scope="col">ID Kategori</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while($row = mysqli_fetch_array($qdata)){
              ?>
              <tr>
                <th><?= $row["Judul"]?></th>
                <td><?= $row["FIle_gmb"]?></td>
                <td><?= $row["isi_blog"]?></td>
                <td><?= $row["tgl_blog"]?></td>
                <td><?= $row["Penulis"]?></td>
                <td><?= $row["nm_katagari"]?></td>
                <td>
                <a href="" class="btn btn-primary btn-xs mb-1">Edit</a>
                <a href="" class="btn btn-primary btn-xs mb-1">Delete</a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          </div>
        </div>
      </div>
      <div class="col-md"></div>
    </div>
  </section>
</form>

<?php } 
else if(isset($_GET['aksi'])){

  if($_GET['aksi'] == "edit"){
    // $edit = mysqli_query($koneksidb, "select * from mst_katagori where id_katagori =".$_GET['id']."") 
    //   or die(mysqli_error($koneksidb));
    // $data = mysqli_fetch_array($edit);
    // echo $data["nm_katagari"];
    // $nama = $data["nm_katagari"];
    $idnya = $_GET["id"];
    $exproses = "update";
  }
  else if($_GET["aksi"] == "add"){
    $nama="";
    $idnya = 0;
    $exproses = "insert";
  }
?>
<form action="mod_blog/proses.php" method="post">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Kategori Blog :
          </div>
          <div class="col-md">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Nama Kategori :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" id="mtext">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            ISi :
          </div>
          <div class="col-md">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
            <label for="floatingTextarea2">Comments</label>
          </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Upload Gambar :
          </div>
          <div class="col-md">
            <input type="file" name="mfile" id="mfile">
          </div>
        </div>
          <div class="mb-3 row">
          <div class="col-md-2">
            Tanggal Input :
          </div>
          <div class="col-md">
            <input type="date" name="mdate" id="mdate">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2"></div>
          <div class="col-md">
          <button type="reset" class="btn btn-secondary"><i class="bi bi-x-lg"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</form>
<?php }?>