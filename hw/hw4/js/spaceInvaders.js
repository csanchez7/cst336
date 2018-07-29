//VARIABLES
var gameScreen;
var output;

var bullets;

var ship;
var enemies = new Array();

var gameTimer;

var leftArrowDown = false;
var rightArrowDown = false;

var bg1, bg2;
const BG_SPEED = 6;

const GS_WIDTH = 800;
const GS_HEIGHT = 600;

//FUNCTIONS
function init(){
	gameScreen = document.getElementById('gameScreen');
	$(gameScreen).css({
	   width:GS_WIDTH + 'px',
	   height:GS_HEIGHT + 'px'
	});

    bg1 = document.createElement('IMG');
    $(bg1).addClass('gameObject');
    $(bg1).attr('src', 'bg.jpg');
    $(bg1).css({
        width:'800px',
        height:'1422px',
        top:'0px',
        left:'0px'
    });
    $(gameScreen).append($(bg1));
    
    bg2 = document.createElement('IMG');
    $(bg2).addClass('gameObject');
    $(bg2).attr('src', 'bg.jpg');
    $(bg2).css({
        width:'800px',
        height:'1422px',
        top:'-1422px',
        left:'0px'
    });
    $(gameScreen).append($(bg2));
    
    bullets = document.createElement('DIV');
    $(bullets).addClass('gameObject');
    $(bullets).css({
        width:$(gameScreen).attr('width'),
        height:$(gameScreen).attr('height'),
        top:'0px',
        left:'0px'
    });
    $(gameScreen).append($(bullets));
    
    output = document.getElementById('output');

	ship = document.createElement('IMG');
	$(ship).attr('src', 'ship.gif');
    $(ship).addClass('gameObject');
    $(ship).css({
        width:'68px',
        height:'68px',
        top:'500px',
        left:'366px'
    });
    $(gameScreen).append($(ship));

	for(var i=0; i<10; i++){
	    var enemy = new Image();
	    $(enemy).addClass('gameObject');
	    $(enemy).attr('src','space-invader.png');
	    $(enemy).css({
	       width:'64px',
	       height:'64px'
	    });
	    $(gameScreen).append($(enemy));
	    placeEnemyShip(enemy);
	    enemies[i] = enemy;
	}
	gameTimer = setInterval(gameloop, 50);
}

function explode(obj){
    var explosion = document.createElement('IMG');

    $(explosion).attr('src', 'explosion.gif?x=' + Date.now());
    $(explosion).addClass('gameObject');
    $(explosion).css({
        width:$(obj).attr("width"),
        height:$(obj).attr("height"),
        top:$(obj).position().top,
        left:$(obj).position().left
    });
    $(gameScreen).append($(explosion));
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
		if(newX > 0) ship.style.left = newX - 25 + 'px';
		else ship.style.left = '0px';
	}

	if(rightArrowDown){
		var newX = parseInt(ship.style.left);
		var maxX = GS_WIDTH - parseInt(ship.style.width);
		if(newX <  maxX) ship.style.left = newX + 25 + 'px';
		else ship.style.left = maxX + 'px';
	}
    
    var b = bullets.children;
    for(var i=0; i<b.length; i++){
        var newY = parseInt(b[i].style.top) - b[i].speed;
        if(newY < 0) bullets.removeChild(b[i]);
        else{
            b[i].style.top = newY + 'px';
            for (var j=0; j<enemies.length; j++){
                if ( hittest(b[i], enemies[j]) ){
                    bullets.removeChild(b[i]);
                    explode(enemies[j]);
                    placeEnemyShip(enemies[j]);
                    break;
                }
            }
        } 
    }
    //output.innerHTML = b.length;
    
    for (var i=0; i<enemies.length; i++){
        var newY = parseInt(enemies[i].style.top);
        if (newY > GS_HEIGHT) placeEnemyShip(enemies[i]);
        else enemies[i].style.top = newY + enemies[i].speed + 'px';
    
        if (hittest(enemies[i], ship)){
            explode(ship);
            explode(enemies[i]);
            ship.style.top = '-10000px';
            placeEnemyShip(enemies[i]);
        }
    }
}

function fire(){
    var bulletWidth = 4;
    var bulletHeight = 8;
    var bullet = document.createElement('DIV');
    $(bullet).addClass('gameObject');
    $(bullet).css({
        backgroundColor:'yellow',
        width:bulletWidth,
        height:bulletHeight
    });
    bullet.speed = 20
    bullet.style.top = parseInt(ship .style.top) - bulletHeight + 'px';
    var shipX = parseInt(ship.style.left)  + parseInt(ship.style.width)/2;
    bullet.style.left = (shipX - bulletWidth/2) + 'px';
    bullets.appendChild(bullet);
}

function placeEnemyShip(e){
    e.speed = Math.floor(Math.random()*10) + 6;
    
    var maxX = GS_WIDTH - parseInt(e.style.width);
    var newX = Math.floor(Math.random()*maxX);
    e.style.left = newX + 'px';
    
    var newY = Math.floor(Math.random()*600) - 1000;
    e.style.top = newY + 'px';
}

// hittest based on distance between the midpoingts of two object
function hittest(a, b){
    var aW = parseInt(a.style.width);
    var aH = parseInt(a.style.height);
    // get center point of object a
    var aX = parseInt(a.style.left) + aW/2;
    var aY = parseInt(a.style.top) + aH/2;
    // get radius of object a (average of height and width / 2)
    var aR = (aW + aH) / 4;
    
    var bW = parseInt(b.style.width);
    var bH = parseInt(b.style.height);
    // get center point of object b
    var bX = parseInt(b.style.left) + bW/2;
    var bY = parseInt(b.style.top) + bW/2;
    // get radius of object b (average of height and width / 2)
    var bR = (bW + bH) / 4;
    
    var minDistance = aR + bR;
    
    var cXs = (aX - bX) * (aX - bX); // change in X squared
    var cYs = (aY - bY) * (aY - bY); // change in Y squared
    var distance = Math.sqrt(cXs + cYs);
    
    if(distance < minDistance) return true;
    else return false;
}

//LISTENERS
window.onload = init();

$(document).keypress(function(event) {
  if (event.charCode==32) fire();
});

$(document).keydown(function(event){
    if(event.keyCode==37) leftArrowDown = true;
    if(event.keyCode==39) rightArrowDown = true; 
});

$(document).keyup(function(event){
    if(event.keyCode==37) leftArrowDown = false;
	if(event.keyCode==39) rightArrowDown = false;
});