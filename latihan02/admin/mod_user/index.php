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
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mbolang</td>
                <td>
                  <input type="submit" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3"><i class="bi bi-check2-square"></i>Edit</label>
                  <input type="reset" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3"><i class="bi bi-trash"></i>Delete</label>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Kuliah</td>
                <td>
                  <input type="submit" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3"><i class="bi bi-check2-square"></i>Edit</label>
                  <input type="reset" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3"><i class="bi bi-trash"></i>Delete</label>
                </td>
              </tr>
            </tbody>
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

<form action="#" method="get">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            id_user :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputPassword1" maxlength="11">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            username :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputPassword1" maxlength="16">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            password :
          </div>
          <div class="col-md">
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">is_active</label>
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