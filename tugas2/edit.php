<?php
    $title = 'Tugas 2 | Form Edit';
?>
<?php include('../partials/header.php') ?>
    <?php include('../partials/navbar.php') ?>
    <div class="container content">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-dark font-weight-bold">Form Edit</h6>
                    </div>
                    <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" value="Judul Buku">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" value="Nama Pengarang">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" value="Penerbit">
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun Terbit</label>
                            <input type="number" class="form-control" name="tahun_terbit" value="2020">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Buku</label>
                            <input type="number" class="form-control" name="jumlah" value="10">
                        </div>
                        <div class="form-group">
                            <a href="list-buku.php" class="btn btn-warning float-left text-light">Kembali</a>
                            <button class="btn btn-primary float-right">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../partials/footer.php') ?>