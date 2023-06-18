<div class="container">
    <a href="?modul=mod_user&aksi=tambah">Tambah data</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Action</th>
        </tr>
        <?php 
        $no = 1;
        $user= mysqli_query($koneksi_db, "SELECT * FROM mst_user WHERE is_active = 1") 
        or die(mysqli_error($koneksidb));

        while($data = mysqli_fetch_array($user))
        {
        ?>
        <tr>
            <td><?= $no++;?></td>
            <td><?= $data["username"]?></td>
            <td><?= $data["nama"]?></td>
            <td>
                <a href="?modul=mod_user&aksi=ubah&user=<?= $data["username"]?>">Ubah</a>
                <a href="mod_user/proses_delete.php?user=<?= $data["username"]?>">hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

