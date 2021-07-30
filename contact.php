<?php
    $title = 'Contact';
?>
<?php include('partials/header.php') ?>
    <?php include('partials/navbar.php') ?>
    <div class="container">
        <div class="row text-center mt-3">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <hr style="width: 250px; border-bottom:2px solid grey">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63407.67059764542!2d107.34600228150266!3d-6.649473269077505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690680907c88d3%3A0x11e73b561d9048fc!2sKec.%20Plered%2C%20Kabupaten%20Purwakarta%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1627627222383!5m2!1sid!2sid" height="750" style="border:0;" allowfullscreen="" loading="lazy" class="embed-responsive-item"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="website" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <label for="name">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-right submit">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
<?php include('partials/footer.php') ?>