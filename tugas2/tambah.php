<?php
    $title = 'Tugas 2 | Form Edit';
    include('../app/database.php');

    if(isset($_POST['submit'])){
        $code = $_POST['code'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
        $qty = $_POST['qty'];
        $publisher = $_POST['publisher'];
        $publication_year = $_POST['publication_year'];
        $writer = $_POST['writer'];

        // $sql = "INSERT INTO books VALUES('','$code','$title','$slug','$description','$qty','$publisher','$publication_year','$writer')";
        $sql = "INSERT INTO `books` (`id`, `code`, `title`, `slug`, `description`, `qty`, `publisher`, `publication_year`, `writer`) VALUES (NULL, '$code', '$title', '4slug', '$description', '$qty', '$publisher', '$publication_year', '$writer');";
        $query = mysqli_query($conn,$sql);
        echo "
            <script>
                alert('Data buku berhasil ditambahkan');
                window.location.href = 'list-buku.php';
            </script>
        ";
    }
?>
<?php include('../partials/header.php') ?>
    <?php include('../partials/navbar.php') ?>
    <div class="container content">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-dark font-weight-bold">Form Tambah</h6>
                    </div>
                    <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                            <label for="code">Code</label>
                            <input required type="text" class="form-control" name="code" placeholder="Code Buku">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input required type="text" class="form-control" name="title" placeholder="Title Buku">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input required type="number" class="form-control" name="qty" placeholder="Qty">
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input required type="text" class="form-control" name="publisher" placeholder="Publisher">
                        </div>
                        <div class="form-group">
                            <label for="publication_year">Publication Year</label>
                            <input required type="number" class="form-control" name="publication_year" placeholder="Publication Year">
                        </div>
                        <div class="form-group">
                            <label for="writer">Writer</label>
                            <input required type="text" class="form-control" name="writer" placeholder="Writer">
                        </div>
                        <div class="form-group">
                            <a href="list-buku.php" class="btn btn-warning float-left text-light">Back</a>
                            <button class="btn btn-primary float-right" name="submit">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../partials/footer.php') ?>