<?php

    include('../app/database.php');
    $title = 'Tugas 2 | Form Edit';

    $id = $_GET['id'];
    if($id){
        $sql = "SELECT * FROM `books` WHERE `id` = '$id'";
        $query = mysqli_query($conn,$sql);
        $book = mysqli_fetch_array($query);
        if(!$book){
            header("Location: list-buku.php");
        }
    }else{
        header("Location: list-buku.php");
    }

    if(isset($_POST['submit'])){
        $code = $_POST['code'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $qty = $_POST['qty'];
        $publisher = $_POST['publisher'];
        $publication_year = $_POST['publication_year'];
        $writer = $_POST['writer'];

        $sql = "UPDATE `books` SET code = '$code', title = '$title', description = '$description', author = '$author', qty = '$qty', publisher = '$publisher', publication_year = '$publication_year', writer = '$writer' WHERE `id` = '$id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "
                <script>
                    alert('Data berhasil diupdate');
                    window.location.href = 'list-buku.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal diupdate');
                window.location.href = 'list-buku.php';
            </script>
        ";
        }
    }
    
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
                            <label for="code">Code</label>
                            <input required type="text" class="form-control" name="code" placeholder="Code Buku" value="<?= $book['code'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input required type="text" class="form-control" name="title" placeholder="Title Buku" value="<?= $book['title'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?= $book['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input required type="number" class="form-control" name="qty" placeholder="Qty" value="<?= $book['qty'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input required type="text" class="form-control" name="author" placeholder="Author" value="<?= $book['author'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input required type="text" class="form-control" name="publisher" placeholder="Publisher" value="<?= $book['publisher'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="publication_year">Publication Year</label>
                            <input required type="number" class="form-control" name="publication_year" placeholder="Publication Year" value="<?= $book['publication_year'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="writer">Writer</label>
                            <input required type="text" class="form-control" name="writer" placeholder="Writer" value="<?= $book['writer'] ?>">
                        </div>
                        <div class="form-group">
                            <a href="list-buku.php" class="btn btn-warning float-left text-light">Back</a>
                            <button class="btn btn-primary float-right" name="submit">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../partials/footer.php') ?>