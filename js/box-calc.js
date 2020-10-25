"use strict";

const allBtn = document.getElementById('all-btn');
const sweetBtn = document.getElementById('sweet-btn');
const nonSweetBtn = document.getElementById('non-sweet-btn');

const boxBtn3 = document.getElementById('count-in-box-btn-3');
const boxBtn6 = document.getElementById('count-in-box-btn-6');
const boxBtn9 = document.getElementById('count-in-box-btn-9');

const sweetBtns = [allBtn, sweetBtn, nonSweetBtn];
const boxBtns = [boxBtn3, boxBtn6, boxBtn9];

const dbox = document.getElementById('collect-your-box');
const donutBlocks = dbox.getElementsByClassName('box-row-element');
const sweetDonuts = dbox.getElementsByClassName('sweet');
const nonSweetDonuts = dbox.getElementsByClassName('non-sweet');

function addSweetClickEvents(btnArr) {

	for (let btn of btnArr) {
		sweetClickEvent(btn, btnArr);
	}
}

function addBoxClickEvents(btnArr) {

	for (let btn of btnArr) {
		boxClickEvent(btn, btnArr);
	}
}

function activate(elem, btnArr) {

	for (let btn of btnArr) {
			btn.classList.remove('active');
		}

		elem.classList.add('active');
}

let sweetPrev = allBtn;

function sweetClickEvent(elem, btnArr) {
	elem.addEventListener('click', (e) => {

		activate(elem, btnArr);

		sweetPrev.classList.add('previous');
		sweetPrev.addEventListener('animationend', (e) => {
			sweetPrev.classList.remove('previous');
		});
		
		sweetPrev = elem;

		for (let block of donutBlocks) {
			block.classList.remove('active');
		}

		setTimeout(() => {

			function animate(blocks) {
				for (let block of blocks) {
					block.classList.remove('abs');
					block.classList.add('active');
				}
			}
			for (let block of donutBlocks) {
				block.classList.add('abs');
			}

			if (elem.id === 'all-btn') {
				animate(donutBlocks);
			}
			if (elem.id === 'sweet-btn') {
				animate(sweetDonuts);
			}
			if (elem.id === 'non-sweet-btn') {
				animate(nonSweetDonuts);
			}

		}, 600);

	});
}

addSweetClickEvents(sweetBtns);

//import {donutCount} from 'index.php';
// let counters = (new Array(donutCount)).fill(0);
// console.log(counters);

const plusButtons = dbox.querySelectorAll('.plus-btn');
const minusButtons = dbox.querySelectorAll('.minus-btn');
const htmlCounters = dbox.querySelectorAll('input.clist-count-var');
const boxForm = document.getElementById('box-menu');

let currentDonutsInBox = 0, donutsInBox = 9;

function numFromStr(str) {
	return /\d+/.exec(str)[0]
}

function boxClickEvent(elem, btnArr) {
	elem.addEventListener('click', (e) => {

		activate(elem, btnArr);
		//достаём инфу о кол-ве донатов из нажатой кнопки
		donutsInBox = numFromStr(elem.id);

		// if (fitsByTop(currentDonutsInBox + 1)) {
		// 	plusButtons.forEach( (element) => {
		// 		element.classList.remove('op50');
		// 	});
		// } else {
		// 	plusButtons.forEach( (element) => {
		// 		element.classList.add('op50');
		// 	});
		// }
		lightOrDark(plusButtons, fitsByTop(currentDonutsInBox + 1));

	});
}		

function addCounterEvents(btnArr) {
	for (let btn of btnArr) {
		counterEvent(btn);
	}
}

function highlight(btnArr, condition = true) {
	if (condition) {	
		btnArr.forEach( (element) => {
			element.classList.remove('op50');
		});
	}
}

function darken(btnArr, condition = true) {
	if (condition) {	
		btnArr.forEach( (element) => {
			element.classList.add('op50');
		});
	}
}

function lightOrDark(btnArr, condition) {
	if (condition) highlight(btnArr);
	else darken(btnArr);
}

function findIdd(str) {
	return /idd\d+/.exec(str)[0]
}

function getIdd(obj) {
	return findIdd(obj.className)
}

function fitsByBottom(num) {
	if (num < 0) return false;
	return true;
}

function fitsByTop(num) {
	if (num > donutsInBox) return false;
	return true;
}

function plusOrMinus(btn, counter1, counter2) {

	function inc(input) {
			input.setAttribute('value', +input.getAttribute('value') + 1 +'');
			//input.value = +input.value + 1 + '';
		} 

	function dec(input) {
			input.setAttribute('value', +input.getAttribute('value') - 1 +'');
			//input.value = +input.value - 1 + '';
		}
	

	if (btn.classList.contains('plus-btn'))
	{	
		if (fitsByTop(currentDonutsInBox + 1)) {

		++currentDonutsInBox;
		inc(counter1);
		inc(counter2);

		const opposites = dbox.querySelectorAll('.minus-btn.'+getIdd(btn));

		highlight(opposites, fitsByBottom(+counter1.value - 1));
		darken(plusButtons, !fitsByTop(currentDonutsInBox + 1)); 
		return true
		}
	} 
	else
	{
		if (fitsByBottom(+counter1.value - 1)) {

		--currentDonutsInBox;
		dec(counter1);
		dec(counter2);

		const couple = dbox.querySelectorAll('.minus-btn.'+getIdd(btn));

		highlight(plusButtons, fitsByTop(currentDonutsInBox + 1));
		darken(couple, !fitsByBottom(+counter1.value - 1));
		return true
		} 
	}

	return false
}

const calcUrl = './box-calc.php';

async function calculate(url) {
		// e.preventDefault();
		//console.log(boxForm);
		let boxFormData = new Object();
		htmlCounters.forEach((element, index) => {
			boxFormData[element.getAttribute('name')] = element.getAttribute('value')
		});

		let response = await fetch(url, {
			method: 'POST',
			body: JSON.stringify(boxFormData) 
		});
		let num = await response.text();
		if (response.ok) {
			//console.log('Данные получены: ' + num);
		}
		else {
			console.log('Ошибка: ' + response.status);
		}
		//console.log(num);
		return num;
}


function counterEvent(btn) {
	btn.addEventListener('click', (e) => {
		e.preventDefault();

		const idd = getIdd(btn);
		const counter1 = dbox.querySelector('.clist-count-var.' + idd);
		const counter2 = dbox.querySelector('.undercount-var.' + idd);
		const amount = document.getElementById('amount-var');
		// plusOrMinus проверяет, можно ли нажать на кнопку, если да, то нажимает.
		// возвращает результат проверки.
		if ( plusOrMinus(btn, counter1, counter2) )
		{
		calculate(calcUrl).then(num => {amount.innerHTML = ` ${num} `});
		}

	});
}



addBoxClickEvents(boxBtns);
addCounterEvents(plusButtons);
addCounterEvents(minusButtons);
 // console.log(boxBtn9);


