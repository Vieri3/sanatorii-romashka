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


	$('#form-auth').submit(function (e) {
		e.preventDefault();
		const form = $(this);
		const formMsg = $('#form-msg');
		formMsg.removeClass('d-none');
		$.ajax({
			url: form.attr('action'),
			data: form.serialize(),
			type: form.attr('method'),
			success: function (response) {
				const responseJSON = JSON.parse(response);
				if (responseJSON.status == 1) {
					form[0].reset();
					formMsg.addClass('d-none');
					// setCookie('name', responseJSON.userName, 1);
					// setCookie('role', responseJSON.userRole, 1);
					window.location.href = '/user.php';
				} else {
					formMsg.html(responseJSON.message);
				}
			},
			error: function (err) {
				formMsg.text('Что-то пошло не так! Перезагрузи страницу и попытайся отправить форму еще раз!')
			}
		})
	});


	// function setCookie(cname, cvalue, exdays) {
	// 	const d = new Date();
	// 	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	// 	let expires = "expires=" + d.toUTCString();
	// 	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	// }


}); // END work jQuery------------------------------------>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

