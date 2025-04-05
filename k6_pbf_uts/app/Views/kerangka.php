<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
            </li>

            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Data Siswa
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= base_url('viewdatamhs') ?>">Kelas 10</a></li>
                <li><a class="dropdown-item" href="<?= base_url('viewdatamhs') ?>">Kelas 11</a></li>
                <li><a class="dropdown-item" href="<?= base_url('viewdatamhs') ?>">Kelas 12</a></li>
              </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('viewdataguru') ?>">Data Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('viewdatakelas') ?>">Data Kelas</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('aksilogout'); ?>" class="btn btn-warning">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?= $this->renderSection('isi_web') ?>
  </div>

</body>

</html>