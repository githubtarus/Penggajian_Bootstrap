<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
    <img width="40px" height="40px" src="<?= base_url()?>/Redmoon.jpg.png" alt="">
        <a class="navbar-brand" style="margin-left: 10px;" href="#">Tsartarus Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('index.php') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('page/karyawan/index.php')?>">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('page/bagian/index.php')?>">Bagian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('page/penggajian/index.php')?>">Penggajian</a>
                </li>
            </ul>
        </div>
    </div>
</nav>