<div class="container">
    <h3>Input Data</h3>
    <form action="" method="post">
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
                <button type="submit" name="btn_login">Simpan Data</button>
        </div>
    </form>
</div>