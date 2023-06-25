<?php
if($_GET["aksi"] == "tambah"){
?>
<div class="container">
    <h2>Input Data</h2>
    <form action="mod_pegawai/proses_add.php" method="post" enctype="multipart/form-data">
        <div class="col-md">
            <label for="txt_user">Nama Pegawai</label>
            <input type="text" name="txt_nama" id="txt_nama">
        </div>
        <div class="col-md">
            <label for="jk">Jensi Kelamin</label>
            <input type="radio" name="op_jk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="op_jk" value="Wanita">Wanita
        </div>
        <div class="col-md">
            <label for="tx_divisi">Divisi</label>
            <select name="tx_divisi" class="form-select">
            <option value="">--Pilih Divisi--</option>
                <?php
                $qdivisi = mysqli_query($koneksi_db, "SELECT * FROM mst_divisi") or die;
                while($c = mysqli_fetch_array($qdivisi)){
                    echo '<option value="'.$c["iddivisi"].'">'.$c['nama_divisi'].'</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-md">
            <label for="tx_jabatan">Jabatan</label>
            <input type="text" name="tx_jabatan" id="tx_jabatan">
        </div>
        <div class="col-md">
            <label for="status">Status Pegawai</label>
            <input type="checkbox" name="st_kontrak" value="Kontrak"><label>Kontrak</label>
            <input type="checkbox" name="st_tetap" value="Tetap"><label>Tetap</label>
        </div>
        <div class="col-md">
            <label for="tx_tgl">Tanggal Bergabung</label>
            <input type="date" name="tx_tgl" id="tx_tgl">
        </div>
        <div class="col-md">
            <label for="tx_alamat">Alamat</label>
            <textarea name="tx_alamat" id="tx_alamat" cols="50" rows="3"></textarea>
        </div>
        <div class="col-md">
            <label for="tx_file">Upload Foto</label>
            <input type="file" name="tx_file" id="tx_file">
        </div>
        <div class="col-md">
            <button class="button">Simpan data</button>
        </div>
    </form>
</div>
<?php 
}else if($_GET["aksi"] == "ubah"){
    $idpeg = $_GET["idpeg"];
    $query_getdata = mysqli_query($koneksi_db, "SELECT a.*, nama_divisi FROM mst_pegawai AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi where idpegawai = $idpeg");
    $data = mysqli_fetch_array($query_getdata);
    $divisi = $data["nama_divisi"];
?>
<div class="container">
    <h2>Input Data</h2>
    <form action="mod_pegawai/proses_edit.php" method="post" enctype="multipart/form-data">
        <div class="col-md">
            <label for="txt_user">Nama Pegawai</label>
            <input type="text" name="txt_nama" id="txt_nama" value="<?= $data["nama_peg"]?>">
        </div>
        <div class="col-md">
            <label for="jk">Jensi Kelamin</label>
            <input type="radio" name="op_jk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="op_jk" value="Wanita">Wanita
        </div>
        <div class="col-md">
            <label for="tx_divisi">Divisi</label>
            <select name="tx_divisi" class="form-select">
            <option value="">--Pilih Divisi--</option>
                <?php
                $qdivisi = mysqli_query($koneksi_db, "SELECT * FROM mst_divisi") or die;
                while($c = mysqli_fetch_array($qdivisi)){
                    if($c["nama_divisi"] == $divisi){
                        { $pilih = "selected"; }
                    }else{ $pilih=""; }
                    echo '<option value="'.$c["iddivisi"].'"'.$pilih.'>'.$c['nama_divisi'].'</option>';
                }
                  ?>               
            </select>
        </div>
        <div class="col-md">
            <label for="tx_jabatan">Jabatan</label>
            <input type="text" name="tx_jabatan" id="tx_jabatan" value="<?= $data["jabatan"]?>">
        </div>
        <div class="col-md">
            <label for="status">Status Pegawai</label>
            <input type="checkbox" name="st_kontrak" value="Kontrak"><label>Kontrak</label>
            <input type="checkbox" name="st_tetap" value="Tetap"><label>Tetap</label>
        </div>
        <div class="col-md">
            <label for="tx_tgl">Tanggal Bergabung</label>
            <input type="date" name="tx_tgl" id="tx_tgl" value="<?= $data["tgl_masuk"]?>">
        </div>
        <div class="col-md">
            <label for="tx_alamat">Alamat</label>
            <textarea name="tx_alamat" id="tx_alamat" cols="50" rows="3"><?= $data["alamat"]?></textarea>
        </div>
        <div class="col-md">
            <label for="tx_file">Upload Foto</label>
            <input type="file" name="tx_file" id="tx_file">
        </div>
        <div class="col-md">
            <button class="button">Simpan data</button>
        </div>
    </form>
</div>
<?php }?>