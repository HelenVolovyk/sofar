const { ready } = require("jquery");

var searchIcon = document.querySelector('.fa-search');
var closeIcon = document.querySelector('.fa-times');
var search = document.getElementById('query');
var box = document.querySelector('.box');

searchIcon.onclick = () => {
	search.classList.add('active');
	closeIcon.classList.add('active');
	searchIcon.classList.add('hide');
	box.classList.add('active');
}
closeIcon.onclick = () => {
	search.classList.remove('active');
	closeIcon.classList.remove('active');
	searchIcon.classList.remove('hide');
	box.classList.remove('active');
}



