$(function(){
    var _hrf = window.location.pathname;
    if(_hrf.indexOf('admin') <= 0){
    if($('#header').length > 0){
    $('#header').remove();
   }
//    $('body').prepend('<div id="header">This is my app</div>');
   $('head').prepend('<style>#header{z-index:9999;background:black;padding:10px;color:white;text-align:center;}.sticky{position:fixed;top:0px;width:100%;}</style>')
    window.onscroll = function(){
    if(window.pageYOffset >50){
        $('#header').addClass('sticky');
    }
    else{
        $('#header').removeClass('sticky'); 
    }
}
}
else{
    $('#header').remove();
}
});
$('#PolarisTextField2').keyup(function(){
    $('.save_bar').show();
})
$('.ista_discard').click(function(){
    $('.save_bar').hide();
})
$('.insta_save').click(function(){
    $('.save_bar').hide();
    $('.cstm-spiner').show();

    var _val  = $('#PolarisTextField2').val();
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    $.ajax({
        url: "/insta",
        type:"POST",
        data:"insta_token="+_val,
        success:function(res){
            setTimeout(function(){
                $('.Polaris-ProgressBar__Progress').attr('value','60');
                $('.Polaris-ProgressBar__Label').text('60%');
                $('.Polaris-ProgressBar__Indicator').attr('style','width: 60%;')
               },1000)
               setTimeout(function(){
                $('.Polaris-ProgressBar__Progress').attr('value','90');
                $('.Polaris-ProgressBar__Label').text('90%');
                $('.Polaris-ProgressBar__Indicator').attr('style','width: 90%;')

               },2500)
            setTimeout(function(){
            $('.cstm-spiner').hide();
           },4000)

        }
      })
})