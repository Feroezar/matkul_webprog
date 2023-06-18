<div class="container">
    <h2>Input Data</h2>
    <form action="mod_user/proses_add.php" method="post">
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
            <select name="tx_divis" class="form-select">
                <option value="">--Pilih Divisi--</option>
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