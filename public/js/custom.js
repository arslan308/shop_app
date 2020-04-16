$(function(){
    if($('#header').length > 0){
    $('#header').remove();
   }
   $('body').prepend('<div id="header">This is my app</div>');
   $('head').prepend('<style>#header{z-index:9999;background:black;padding:10px;color:white;text-align:center;}.sticky{position:fixed;top:0px;width:100%;}</style>')
// var header = $('#header').offsetTop;
// alert(header);
window.onscroll = function(){
    if(window.pageYOffset >50){
        $('#header').addClass('sticky');
    }
    else{
        $('#header').removeClass('sticky');
    }
};
});
$('#PolarisTextField2').keyup(function(){
    $('.save_bar').show();
})
$('.ista_discard').click(function(){
    $('.save_bar').hide();
})
$('.insta_save').click(function(){
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
           console.log(res);
        }
      })
})