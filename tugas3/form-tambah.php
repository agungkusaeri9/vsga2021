<?php
    $title = 'Tugas 2 | Form Edit';
    include('../app/database.php');

    if(isset($_POST['submit'])){
        $code = $_POST['code'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $qty = $_POST['qty'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $publication_year = $_POST['publication_year'];
        $writer = $_POST['writer'];

        $sql = "INSERT INTO `books` (`id`, `code`, `title`, `description`, `qty`, `author`, `publisher`, `publication_year`, `writer`) VALUES (NULL, '$code', '$title', '$description', '$qty', '$author', '$publisher', '$publication_year', '$writer');";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "
                <script>
                    alert('Data buku berhasil ditambahkan');
                    window.location.href = '../tugas2/list-buku.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data buku gagal ditambahkan');
                    window.location.href = 'form-tambah.php';
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
                        <h6 class="text-dark font-weight-bold">Form Tambah</h6>
                    </div>
                    <div class="card-body">
                    <form action="" method="post" id="formTambah">
                    <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" name="code" placeholder="Code Buku">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title Buku">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" class="form-control" name="qty" placeholder="Qty">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" name="author" placeholder="Author">
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input type="text" class="form-control" name="publisher" placeholder="Publisher">
                        </div>
                        <div class="form-group">
                            <label for="publication_year">Publication Year</label>
                            <input type="number" class="form-control datepicker" name="publication_year" placeholder="Publication Year"  maxlength="4">
                        </div>
                        <div class="form-group">
                            <label for="writer">Writer</label>
                            <input type="text" class="form-control" name="writer" placeholder="Writer">
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