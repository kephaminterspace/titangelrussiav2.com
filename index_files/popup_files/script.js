var feed = {}; 
var win = window.parent;
/**
 * Submit
 */
feed.submit = function (even, phone,name) {
	feed.RemoveErrorMessage();

	var rephone = /^[0-9\-\+\(\) ]*$/i;

	if(!name.value.length || name.value.length < 3) {
		even.preventDefault();
		feed.errorMessage(name, 'Вы не представились');
		return false;
	} 

	if(!phone.value.length || phone.value.length < 5) {
		even.preventDefault();
		feed.errorMessage(phone, 'Вы не заполнили поле "Телефон"');
		return false;
	} 

	if(!rephone.test(phone.value)) {
		even.preventDefault();
		feed.errorMessage(phone, 'Неверно заполнено поле "Телефон"');
		return false;
	}

	win.postMessage("submit",'*');
	return false;
}


/**
 * Показываем ошибку
 */
feed.errorMessage = function (elem, msg) {

	var pos = feed.offsetPosition(elem);

	var Error = document.createElement('div');	

	Error.className = 'errorMessage';
	Error.id = 'errorMessage';

	Error.style.top = pos[1] + 'px';
	Error.style.left = pos[0] + 'px';


	Error.innerHTML = msg;

	document.body.appendChild(Error);

	return false;

}


/**
 * Удаление ошибки
 */
feed.RemoveErrorMessage = function () {
	
	var error = document.getElementById('errorMessage');
	
	if (error) {
		error.parentNode.removeChild(error);
	}
}	



/**
 * Положение элемента
 */
feed.offsetPosition = function (element) {    
	var offsetLeft = 0, offsetTop = 0;

	do {

		offsetLeft += element.offsetLeft
		offsetTop  += element.offsetTop;    

	} while ( element = element.offsetParent );    

	return [ offsetLeft, offsetTop];
}


/**
 *  Добавляем событие
 */
feed.addEvent = function (obj, type, fn) {

  if ( obj.attachEvent ) {

    obj['e' + type + fn] = fn;

    obj[type + fn] = function() {
    	obj['e' + type + fn]( window.event );
    }

    obj.attachEvent( 'on' + type, obj[type + fn] );

  } else
    obj.addEventListener( type, fn, false );
}



document.addEventListener('DOMContentLoaded', function () {
  	var form = document.getElementById('ad1cbf-form');
  	var phoneInput = document.getElementById('orderformcdn_phone');
  	var nameInput = document.getElementById('orderformcdn_name');

	feed.addEvent(form, 'submit', function(event) {
		feed.submit(event, phoneInput, nameInput);
	});
	feed.addEvent(phoneInput, 'focus', function(event) {
		feed.RemoveErrorMessage();
	});
	feed.addEvent(nameInput, 'focus', function(event) {
		feed.RemoveErrorMessage();
	});
});

