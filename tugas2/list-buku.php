<?php
    include('../app/database.php');

    $sql = "SELECT * from books";
    $query = mysqli_query($conn,$sql);
    $title = 'Tugas 2 | Data Buku';
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
                                <table class="table table-bordered table-striped" id="bookTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Code</th>
                                            <th>Title</th>
                                            <th>Qty</th>
                                            <th>Publisher</th>
                                            <th>Publication Year</th>
                                            <th>Writer</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php while($book = mysqli_fetch_assoc($query)) : ?>
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= $book['code'] ?></td>
                                            <td><?= $book['title'] ?></td>
                                            <td><?= $book['qty'] ?></td>
                                            <td><?= $book['publisher'] ?></td>
                                            <td><?= $book['publication_year'] ?></td>
                                            <td><?= $book['writer'] ?></td>
                                            <td><a href="edit.php" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../partials/footer.php') ?>