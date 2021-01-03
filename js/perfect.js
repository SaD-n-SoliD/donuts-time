'use strict';

const perfect = document.querySelector('.your-perfect-donut');
const form = perfect.querySelector('#custom-donut-form');
const price = perfect.querySelector('.perfect-amount-var');
const count = perfect.querySelector('.perfect-count-var');

let fields = form.querySelectorAll('.part-choise');

let sum = 0;
let countVar = 1;

function refresh() {
	sum = 0;
	fields.forEach((el) => {
		if (getComputedStyle(el).display == 'none') return;
		sum += +/\d+/.exec(el.value)[0];
	});
	price.innerText = ' ' + (sum * countVar) + ' ';
	count.innerText = countVar;
}

refresh();

fields.forEach((el) => {
	el.addEventListener('change', refresh);
});

const minus = perfect.querySelector('.perfect-minus');
const plus = perfect.querySelector('.perfect-plus');

minus.addEventListener('click', () => {
	countVar--;
	plus.classList.remove('op50');
	if (countVar <= 0) {
		minus.classList.add('op50');
		countVar = 0;
	}
	else {
		minus.classList.remove('op50');
	}
	refresh();
});

plus.addEventListener('click', () => {
	countVar++;
	minus.classList.remove('op50');
	if (countVar >= 9) {
		countVar = 9;
		plus.classList.add('op50');
	}
	else {
		plus.classList.remove('op50');
	}
	refresh();
});


