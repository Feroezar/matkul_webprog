<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
</head>
<body>
  <div class="modal-body">    
    <div class="mb-3 row">
      <div class="col-md-3 chi"></div>
        <div class="col-md-2">Username</div>
          <div class="col-md">
            <input type="text" class="form-control" name="username" id="username" placeholder="id">
          </div>
            <div class="col-md-2"></div>
    </div>
      <div class="mb-3 row">
        <div class="col-md-3 chi"></div>
          <div class="col-md-2">password</div>
            <div class="col">
              <input class="form-control" type="password" placeholder="pass" name="pass" id="pass" aria-label="default input example">
            </div>
            <div class="col-md-2"></div>
      </div>
  </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button class="btn btn-primary" name="btnlogin" id="btnlogin" type="button" onclick="checklogin('index.html')"><i class="bi bi-save2"></i> Login</button>
    </div>    
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>