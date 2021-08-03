$(function(){
    let wind = $(window).width();
    if(wind < 500){
        $('.headerImg').addClass(['order-first','mb-4']);
        console.log(wind);
    }

    $('.tugas1').hover(function(){
        $('.tugas1 .card').addClass('shadow');
        $('.tugas1 .card').removeClass('bg-default').addClass('bg-success');
        $('.tugas1 .card .card-header h6,p').removeClass('text-dark').addClass('text-light');
    })
    $('.tugas1').mouseleave(function(){
        $('.tugas1 .card').removeClass(['shadow','bg-success']);
        $('.tugas1 .card .card-header h6,p').removeClass('text-light').addClass('text-dark');
    })

    $('#formContact').on('submit', function(e){
        e.preventDefault();
        alert('Fitur Belum Berfungsi !');
        window.location.href = '../../index.php'
    })
})