$(document).ready(function () { // Start work jQuery--------------------->>>>>>>>>>>>>>>>>>>>

  //изменение цвета у всех элементов h1
  $('h1').css("color", "green");


  // функция сбрасывает все check в форме выбора меню еды
  $('#reset_order').click(function () {
    $('form input:checkbox').prop('checked', false);
  });


  // акстивная ссылка при нажатии на нее
  $("#nav_lc [href]").each(function () {
    if (this.href == window.location.href) {
      $(this).addClass("active");
    }
  });

  //если ни один из check не отмечен отправки не будет
  $('#form-food').on('submit', function (e) {
    if ($('input[class^="form-check-input"]:checked').length === 0) {
      alert('Oops! Может вы выберете хоть что-то!!');
      e.preventDefault();
    }
  });

  //  в файле cinema-hall.php смена цветов места 
  $('#cinema-hall').children().click(function(){
    $(this).toggleClass('sold-ticket').toggleClass('not-sold-ticket');
    if($(this).hasClass('not-sold-ticket')){
        $(this).find("input").val('0');
    }else{
        $(this).find("input").val('1');
    }
    console.log($(this).find("input").val())
  })


}); // END work jQuery------------------------------------>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

