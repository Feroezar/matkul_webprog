<?php
if(!isset($_GET['aksi'])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "SELECT a.*, nm_katagari FROM mst_blog AS a INNER JOIN mst_katagori AS b ON a.id_katagori = b.id_katagori ") 
    or die(mysqli_error($koneksidb));
?>
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
                <a href="?modul=mod_blog&aksi=edit&id=<?php echo $row["id_blog"]?>" class="btn btn-primary btn-xs mb-1">Edit</a>
                <a href="mod_blog/proses.php?proses=delete&id=<?= $row["id_blog"]?>" class="btn btn-primary btn-xs mb-1">Delete</a>
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

<?php } 
else if(isset($_GET['aksi'])){

  if($_GET['aksi'] == "edit"){
    $edit = mysqli_query($koneksidb, "select * from mst_blog where id_blog =".$_GET['id']."") 
      or die(mysqli_error($koneksidb));
    $data = mysqli_fetch_array($edit);
    // echo $data["nm_katagari"];
    $kategorinya = $data["id_katagori"];
    $judulnya = $data["Judul"];
    $isinya = $data["isi_blog"];
    $tglnya = $data["tgl_blog"];
    $idnya = $_GET["id"];
    $isaktif = $data["is_aktif"];
    $exproses = "update";
  }
  else if($_GET["aksi"] == "add"){
    $judulnya="";
    $idblog = 0;
    $exproses = "insert";
    $kategorinya = "";
    $isinya = "";
    $tglnya = "";
    $isaktif = 0;
  }
?>
<form action="mod_blog/proses.php?proses=<?= $exproses?>" method="post">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <input type="hidden" name="idblog" value="<?= $idblog?>">
        <div class="mb-3 row">
          <div class="col-md-2">
            Kategori Blog :
          </div>
          <div class="col-md">
          <select class="form-select" aria-label="Default select example" name="kategori">
            <option selected>DiPilih</option>
              <?php 
              $qkategori = mysqli_query($koneksidb, "select * from mst_katagori")
                          or die ("data tidak dditemukan".mysqli_error($koneksidb));
              while ($cb = mysqli_fetch_array($qkategori)){
                if($cb["id_katagori"] == $kategorinya)
                { $pilih = "selected"; }
                else{ $pilih=""; }
                echo '<option value="'.$cb["id_katagori"] .'"'.$pilih.'>'.$cb["nm_katagari"].'</option>';
              } 
              ?>
          </select>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Judul :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="hidden" name="id_blog" class="form-control" id="exampleInputPassword1" maxlength="11" value="<?= $idnya?>">
              <input type="text" name="judul" class="form-control" id="mtext" value="<?= $judulnya?>">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            ISi :
          </div>
          <div class="col-md">
          <div class="form-floating">
            <textarea class="form-control" name="isi" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"><?= $isinya?></textarea>
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
            <input type="datetime-local" name="tanggal" id="mdate" value="<?= $tglnya ?>">
            <input type="checkbox" name="is_aktif" id=""<?php if($isaktif == 1){ echo "checked"; } ?>>
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