$('.header__linkt').on('click', function(e) {
	e.preventDefault(); // предотвращаем стандартное поведение перехода по ссылке
	$('.header__link').removeClass('active'); // убираем класс у всех кнопок
	$(this).addClass('active'); // добавляем класс нажатой кнопке
 });
$( '.product__link').on('click', function(e) {
	e.preventDefault(); // предотвращаем стандартное поведение перехода по ссылке
	$( '.product__link').removeClass('active'); // убираем класс у всех кнопок
	$(this).addClass('active'); // добавляем класс нажатой кнопке
 });