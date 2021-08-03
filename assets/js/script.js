$(function(){
    let wind = $(window).width();
    if(wind < 500){
        $('.headerImg').addClass(['order-first','mb-4']);
    }
    $('#formContact').on('submit', function(e){
        e.preventDefault();
        alert('Fitur Belum Berfungsi !');
        window.location.href = '../../index.php'
    })
})