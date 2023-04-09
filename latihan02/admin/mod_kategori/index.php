<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<form action="#" method="get">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <div class="col-md">
            <input type="submit" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Tambah Data</label>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID Kategori</th>
                <th scope="col">Nama Kategori</th>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>