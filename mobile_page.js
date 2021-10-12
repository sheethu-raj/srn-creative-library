var circle = document.getElementById("circle");
var upbtn = document.getElementById("up");
var downbtn = document.getElementById("down");
var rotatevalue = circle.style.transform;
var rotatesum;

upbtn.onclick = function(){
	rotatesum = rotatevalue + "rotate(-90deg)";
	circle.style.transform = rotatesum;
	rotatevalue = rotatesum;
}
downbtn.onclick = function(){
	rotatesum = rotatevalue + "rotate(90deg)";
	circle.style.transform = rotatesum;
	rotatevalue = rotatesum;
}
