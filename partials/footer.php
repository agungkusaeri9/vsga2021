
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $('.submit').on('click', function(e){
            e.preventDefault();
            alert('Fitur ini belum berjalan !');
            window.location.href = 'index.php';
        })

        $(function(){
            let cardLink = $('.card-link').attr('href');

            $('.card-link').on('click', function(){
                if(cardLink == ''){
                    alert('Belum Ada Tugas');
                }
            })
        })
    </script>
  </body>
</html>