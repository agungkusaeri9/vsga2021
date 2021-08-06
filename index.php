<?php
    $title = 'Home';
?>
<?php include('partials/header.php') ?>
    <?php include('partials/navbar.php') ?>
    <div class="container content">
        <div class="row mt-3">
            <div class="col-md-4">
                <a href="tugas1/antarmuka-web.php" class="nav-link">
                    <div class="card bg-success text-center" style="min-height: 200px;">
                        <div class="card-header">
                            <h6 class="text-light font-weight-bold">Tugas 1</h6>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                           <p class="text-center text-light">Antarmuka Web</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tugas2/list-buku.php" class="nav-link">
                    <div class="card bg-info text-center" style="min-height: 200px;">
                        <div class="card-header">
                            <h6 class="text-light font-weight-bold">Tugas 2</h6>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                           <p class="text-center text-light">
                               <ul class="list-unstyled">
                                   <li class="text-light">List Buku</li>
                                   <li class="text-light">Form Tambah</li>
                                   <li class="text-light">Form Edit</li>
                               </ul>
                           </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="latihan/" class="nav-link">
                    <div class="card bg-warning text-center" style="min-height: 200px;">
                        <div class="card-header">
                            <h6 class="text-light font-weight-bold">Latihan</h6>
                        </div>
                        <div class="card-body align-self-center">
                           <p class="text-center text-light">Latihan PHP</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include('partials/footer.php') ?>