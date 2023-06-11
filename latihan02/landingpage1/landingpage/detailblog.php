<?php
require_once("../../koneksidb.php");
  $qdata = mysqli_query($koneksidb, "SELECT a.*, nm_kategori FROM mst_blog AS a INNER JOIN mst_kategori AS b ON a.id_kategori = b.id_kategori ") 
    or die(mysqli_error($koneksidb));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid pe-5 ps-5">
        <a class="navbar-brand fw-bold" href="index.html"
          ><h3>AniNur's Page</h3></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse text-white"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontnav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#section-card">Resume</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-people-fill"></i> Download</a
              >
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="signin.html" target="_blank">
                    <i class="bi bi-file-text"></i> Materi HTML
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    ><i class="bi bi-code-square"></i> Materi CSS</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"
                    ><i class="bi bi-bootstrap-reboot"></i> Materi Bootstrap</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- blog -->
    <section id="blog" class="bg-white">
      <div class="container d-flex flex-column align-items-center p-4">
        <h1 class="text-primary text-opacity-100 pb-3">=== My Blog ===</h1>
        <div class="row mb-4">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <?php 
            $edit = mysqli_query($koneksidb, "select * from mst_blog where id_blog =".$_GET['id']."") 
              or die(mysqli_error($koneksidb));
            $data = mysqli_fetch_array($edit)
            ?>
            <h4><?= $data["judul"]?></h4>
            <div class="mb-2">
              <span class="fs-6"
                ><i class="bi bi-calendar"></i> <?= $data["tgl_blog"]?>, Created By :
                <?= $data["penulis"]?></span
              >
              <hr />
            </div>
            <img
              src="assets/images/<?= $data["file_gmb"]?>"
              width="500"
              class="img-thumbnail img-fluid mx-auto d-block"
            />
            <p class="justify-content-evenly">
            <?= $data["isi_blog"]?>
            </p>
            <hr />
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-info bg-opacity-50">
      <div class="container d-flex justify-content-center text-white p-3">
        <span class="me-5 pe-5 fs-6">
          <address class="fw-bold">Head Office :</address>
          <p>
            Jalan Medan Merdeka Barat No. 9 Jakarta Pusat 10110 DKI Jakarta,
            Indonesia
          </p>
          <p>Telepon : 081-319301-010</p>
          <p>Emai : aninur.h@gmail.com</p>
        </span>
        <span class="ms-5">
          <address class="fw-bold">Social Media</address>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer"
              ><i class="bi bi-whatsapp iconsize"></i
            ></a>
            Whatsapp
          </p>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer"
              ><i class="bi bi-instagram iconsize"></i
            ></a>
            Instagram
          </p>
          <p>
            <a href="http://" target="_blank" rel="noopener noreferrer"
              ><i class="bi bi-facebook iconsize"></i
            ></a>
            Facebook
          </p>
        </span>
      </div>
    </footer>
    <!-- include file bootstrap js -->
    <script src="assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
