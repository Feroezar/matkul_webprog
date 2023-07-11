<div class="container">
    <h1>Data Pegawai</h1>
    <a href="?modul=mod_pegawai&aksi=tambah">Tambah Data</a>
    <table border="1" cellpading="10">
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Nama Divisi & Jabatan</th>
            <th>status</th>
            <th>Tanggal Masuk</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        <?php 
        $no = 1;
        $pegawai= mysqli_query($koneksi_db, "SELECT a.*, nama_divisi FROM mst_pegawai AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi") 
        or die(mysqli_error($koneksidb));

        while($data = mysqli_fetch_array($pegawai))
        {
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $data["nama_peg"]?></td>
            <td><?= $data["jk"]?></td>
            <td><?= $data["nama_divisi"]?> . <?= $data["jabatan"]?></td>
            <td><?= $data["status"]?></td>
            <td><?= date('d-m-Y', strtotime($data["tgl_masuk"]))?></td>
            <td><?= $data["alamat"]?></td>
            <td><img src="filefoto/<?= $data["foto"]?>" width="130px" height="100px" alt=""></td>
            <td>
                <a href="?modul=mod_pegawai&aksi=ubah&idpeg=<?= $data["idpegawai"]?>">Ubah</a>
                <a href="mod_pegawai/proses_delete.php?idpeg=<?= $data["idpegawai"]?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>