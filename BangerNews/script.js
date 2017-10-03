var menuPressed = false;

function menuButtonClick () {
	if(!menuPressed) {
		document.getElementById('hiderjs').style.display = 'flex';
		document.getElementById('headerjs').style.position = 'fixed';
		document.getElementById('headerjs').style.width = '100%';
		menuPressed=true;
	}
	else {
		document.getElementById('hiderjs').style.display = 'none';
		document.getElementById('headerjs').style.position = 'static';
		menuPressed=false;
	}
}





var filtButPressed = false;

function myFunc () {
	if (!filtButPressed) {
		filtButPressed = true;
		document.getElementById('ul-filt1').style.display = 'block';
	}
	else {
		filtButPressed = false;
		document.getElementById('ul-filt1').style.display = 'none';
	}
}