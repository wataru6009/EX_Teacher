$(function(){
    $('.js-modal-open').on('click', function () {
        $('.js-modal').fadeIn();
      var reserve_date = $(this).val();
      var reserve_part = $(this).text();
      console.log(reserve_date);
      console.log(reserve_part);
      $('.cancel_date').text("予約日 : " + reserve_date);
      $('.cancel_part').text("時間 : " + reserve_part);
      $('.hidden_cancel_date').val(reserve_date);
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
});
