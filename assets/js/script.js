$(document).ready(function(){
    let wind = $(window).width();
    if(wind < 500){
        $('.headerImg').addClass(['order-first','mb-4']);
    }
    $('#formContact').on('submit', function(e){
        e.preventDefault();
        alert('Fitur Belum Berfungsi !');
        window.location.href = '../../index.php'
    });
    $('#bookTable').DataTable();
    $('#formTambah').validate({
        focusInvalid: true,
        errorClass: 'is-invalid',
        messages: {
            required: "Kolom ini harus diisi",
            minlength: jQuery.validator.format("Masukan minimal {0} karakter")
        },
        rules: {
            code : {
                required: true,
                minlength: 5
            },
            title : {
                required: true
            },
            description : {
                required: true
            },
            qty : {
                required: true
            },
            author : {
                required: true
            },
            publisher : {
                required: true
            },
            publication_year : {
                required: true,
                number: true,
                min: "2000"
            },
            writer : {
                required: true
            }
        }
    })
})