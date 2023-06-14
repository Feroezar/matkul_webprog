<?php
if($_GET["aksi"] == "tambah"){
?>
<div class="container">
    <h3>Input Data</h3>
    <form action="mod_user/proses_add.php" method="post">
        <div class="col">
            <label for="txt_nama">Name</label>
            <input type="text" name="txt_nama" id="txt_nama"
            oninvalid="this.setCustomValidity('Username Wajib Diisi')"
            required="true"
            oninput="setCustomValidity('')"/>
        </div>
        <div class="col">
            <label for="txt_user">Username</label>
            <input type="text" name="txt_user" id="txt_user"
            oninvalid="this.setCustomValidity('Username Wajib Diisi')"
            required="true"
            oninput="setCustomValidity('')"/>
        </div>
        <div class="col">
            <label for="txt_pasw">Password</label>
            <input type="password" name="txt_pasw" id="txt_pasw" 
            oninvalid="this.setCostomValidity('username Wajib Diisi')"
            required="true"
            oninput="setCostomValidity('')"/>
        </div>
        <div class="col">
            <label for="txt_pasw2">Ulangi Password</label>
            <input type="password" name="txt_pasw2" id="txt_pasw2" 
            oninvalid="this.setCostomValidity('username Wajib Diisi')"
            required="true"
            oninput="setCostomValidity('')"/>
        </div>
        <div class="col">
                <button type="submit" name="btn_login" id="btn_simpanuser">Simpan Data</button>
        </div>
    </form>
</div>
<?php 
}else if($_GET["aksi"] == "ubah"){
    $usernya = $_GET["user"];
    $query_getdata = mysqli_query($koneksi_db, "SELECT * FROM mst_user where username = '".$usernya."'");
    $data = mysqli_fetch_array($query_getdata);
?>
<div class="container">
    <h3>Ubah data Data</h3>
    <form action="mod_user/proses_edit.php" method="post">
        <div class="col">
            <label for="txt_nama">Name</label>
            <input type="text" name="txt_nama" id="txt_nama"
            oninvalid="this.setCustomValidity('Username Wajib Diisi')"
            required="true"
            oninput="setCustomValidity('')"value = "<?= $data["nama"]?>"/>
        </div>
        <div class="col">
            <label for="txt_user">Username</label>
            <input type="text" name="txt_user" id="txt_user"
            oninvalid="this.setCustomValidity('Username Wajib Diisi')"
            required="true"
            oninput="setCustomValidity('')" value = "<?= $data["username"]?>" readonly/>
        </div>
        <div class="col">
            <label for="txt_pasw">Ganti Password</label>
            <input type="hidden" name="pass_lama" value="<?= $data["password"]?>">
            <input type="password" name="txt_pasw" id="txt_pasw"/>
        </div>
        <div class="col">
            <label for="txt_pasw2">Ulangi Password</label>
            <input type="password" name="txt_pasw2" id="txt_pasw2"/>
        </div>
        <div class="col">
                <button type="submit" name="btn_login" id="btn_simpanuser">Simpan Data</button>
        </div>
    </form>
</div>
<?php } ?>