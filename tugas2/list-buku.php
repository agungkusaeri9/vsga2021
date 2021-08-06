<?php
    include('../app/database.php');

    $sql = "SELECT * FROM `books` ORDER BY code ASC";
    $query = mysqli_query($conn,$sql);
    $title = 'Tugas 2 | Data Buku';

    if(isset($_POST['hapus'])){
        $id = $_POST['id'];
        if($id){
            $sql = "DELETE FROM `books` WHERE id = '$id'";
            mysqli_query($conn,$sql);
            echo "
                <script>
                    alert('Data berhasil dihapus');
                    window.location.href = 'list-buku.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data gagal dihapus');
                </script>
            ";
        }
    }
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
                                            <th>Author</th>
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
                                            <td><?= $book['author'] ?></td>
                                            <td><?= $book['qty'] ?></td>
                                            <td><?= $book['publisher'] ?></td>
                                            <td><?= $book['publication_year'] ?></td>
                                            <td><?= $book['writer'] ?></td>
                                            <td>
                                                <a href="edit.php?id=<?= $book['id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                                <form action="" method="post" class="d-inline">
                                                    <input type="hidden" name="id" value="<?= $book['id'] ?>">
                                                    <button class="btn btn-sm btn-danger" name="hapus" onclick="return confirm('Apakah yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
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