<?php
    $title = 'Tugas 2';
?>
<?php include('../partials/header.php') ?>
    <?php include('../partials/navbar.php') ?>
    <div class="container content">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h6 class="text-dark font-weight-bold">List Buku</h6>
                            <a href="tambah.php" class="btn btn-sm btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>100 Hari Menuju Sukses</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Media Creative</td>
                                            <td>2019</td>
                                            <td>10</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Belajar PHP Native</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Koding</td>
                                            <td>2018</td>
                                            <td>12</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Belajar HTML</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Koding</td>
                                            <td>2019</td>
                                            <td>2</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Belajar CSS</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Koding</td>
                                            <td>2017</td>
                                            <td>12</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Belajar Laravel</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Koding</td>
                                            <td>2021</td>
                                            <td>12</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Belajar Javascript</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Sekolah Koding</td>
                                            <td>2018</td>
                                            <td>5</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Belajar Codeigniter 3</td>
                                            <td>Arif Sah</td>
                                            <td>Ricard OK</td>
                                            <td>Cv Angin RIbut</td>
                                            <td>2020</td>
                                            <td>5</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Belajar Codeigniter</td>
                                            <td>Arif Sah</td>
                                            <td>Ricard OK</td>
                                            <td>Cv Angin Ribut</td>
                                            <td>2021</td>
                                            <td>2</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Belajar Bootstrap 4</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Koding</td>
                                            <td>2019</td>
                                            <td>5</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Belajar VB</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Agung Kusaeri</td>
                                            <td>Cv Koding</td>
                                            <td>2019</td>
                                            <td>10</td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../partials/footer.php') ?>