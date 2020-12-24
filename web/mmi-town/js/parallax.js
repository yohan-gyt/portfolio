//PARALLAX FUNCTION
document.addEventListener('scroll', () => {
	const top = window.pageYOffset;
	const one = document.querySelector('.one'); 
	const two = document.querySelector('.two');
	const three = document.querySelector('.three');
	const four = document.querySelector('.four');
	const five = document.querySelector('.five');
	const six = document.querySelector('.six');
	const seven = document.querySelector('.seven');
	
	one.style.bottom = (-(top * 0) + 'px');
	two.style.bottom = (-(top * 0.2) + 'px');
	three.style.bottom = (-(top * 0.3) + 'px');
	four.style.bottom = (-(top * 0.4) + 'px');
	five.style.bottom = (-(top * 0.5) + 'px');
	six.style.bottom = (-(top * 0.6) + 'px');
	seven.style.bottom = (-(top * 0.7) + 'px');
});