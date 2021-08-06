<?php
  include('../app/config.php');

  var_dump(url());
  $title = 'Home';
?>
<?php include('../partials/header.php') ?>
    <?php include('../partials/navbar.php') ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-3">
                <a href="" class="nav-link card-link">
                    <div class="card shadow text-center" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center">
                            <h1 class="align-self-center text-dark">Tugas 1</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="" class="nav-link card-link">
                    <div class="card shadow text-center" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center">
                            <h1 class="align-self-center text-dark">Tugas 2</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="" class="nav-link card-link">
                    <div class="card shadow text-center" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center">
                            <h1 class="align-self-center text-dark">Tugas 3</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="" class="nav-link card-link">
                    <div class="card shadow text-center" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center">
                            <h1 class="align-self-center text-dark">Tugas 4</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include('../partials/footer.php') ?>