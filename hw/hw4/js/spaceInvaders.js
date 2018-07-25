//VARIABLES
var gameScreen;
var output;

var ship;

var gameTimer;

var leftArrowDown = false;
var rightArrowDown = false;

var bg1, bg2;
const BG_SPEED = 4;

const GS_WIDTH = 800;
const GS_HEIGHT = 600;

//FUNCTIONS
function init(){
	gameScreen = document.getElementById('gameScreen');
	gameScreen.style.width = GS_WIDTH + 'px';
	gameScreen.style.height = GS_HEIGHT + 'px';

    bg1 = document.createElement('IMG');
    bg1.className = 'gameObject';
    bg1.src = 'bg.jpg';
    bg1.style.width = '800px';
    bg1.style.height = '1422px';
    bg1.style.left = '0px';
    bg1.style.top = '0px';
    gameScreen.appendChild(bg1);    
    
    output = document.getElementById('output');

    
    bg2 = document.createElement('IMG');
    bg2.className = 'gameObject';
    bg2.src = 'bg.jpg';
    bg2.style.width = '800px';
    bg2.style.height = '1422px';
    bg2.style.left = '0px';
    bg2.style.top = '-1422px';
    gameScreen.appendChild(bg2);

	ship = document.createElement('IMG');
	ship.src = 'ship.gif';
	ship.className = 'gameObject';
	ship.style.width = '68px';
	ship.style.height = '68px';
	ship.style.top = '500px';
	ship.style.left = '366px';
    
    
	gameScreen.appendChild(ship);

    

	gameTimer = setInterval(gameloop, 50);
}

function gameloop(){

    var bgY = parseInt(bg1.style.top) + BG_SPEED;
    if (bgY > GS_HEIGHT) {
        bg1.style.top = -1 * parseInt(bg1.style.height) + 'px';
    }
    else bg1.style.top = bgY + 'px';
    
    bgY = parseInt(bg2.style.top) + BG_SPEED;
    if (bgY > GS_HEIGHT) {
        bg2.style.top = -1 * parseInt(bg2.style.height) + 'px';
    }
    else bg2.style.top = bgY + 'px';
    
	if(leftArrowDown){
		var newX = parseInt(ship.style.left);
		if(newX > 0) ship.style.left = newX - 20 + 'px';
		else ship.style.left = '0px';
	}

	if(rightArrowDown){
		var newX = parseInt(ship.style.left);
		var maxX = GS_WIDTH - parseInt(ship.style.width);
		if(newX <  maxX) ship.style.left = newX + 20 + 'px';
		else ship.style.left = maxX + 'px';
	}
}

//LISTENERS
document.addEventListener('keydown', function(event){
	if(event.keyCode==37) leftArrowDown = true;
	if(event.keyCode==39) rightArrowDown = true;
});

document.addEventListener('keyup', function(event){
	if(event.keyCode==37) leftArrowDown = false;
	if(event.keyCode==39) rightArrowDown = false;
});