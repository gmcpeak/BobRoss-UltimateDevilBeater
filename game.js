var key_w = false;
var key_a = false;
var key_s = false;
var key_d = false;

var x = 0;
var y = 0;
var speed = 10;

function gameloop() {
  if (key_w) { y-=speed; }
  if (key_a) { x-=speed; }
  if (key_s) { y+=speed; }
  if (key_d) { x+=speed; }
  var dude = document.getElementById("moveme");
  dude.style.left = x + "px";
  dude.style.top = y + "px";
}

function keydowner(event) {
 var k = event.which || event.keyCode;
 if (k == 87) { key_w = true; }
 if (k == 65) { key_a = true; }
 if (k == 83) { key_s = true; }
 if (k == 68) { key_d = true; }
}

function keyupper(event) {
 var k = event.which || event.keyCode;
 if (k == 87) { key_w = false; }
 if (k == 65) { key_a = false; }
 if (k == 83) { key_s = false; }
 if (k == 68) { key_d = false; }
}
