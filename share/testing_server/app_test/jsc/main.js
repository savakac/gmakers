// Function main.js

function Display()
{
	
}

sliderInt = 1;
sliderNext = 2;

$(document).ready(function(){
	$("#slidebox>img#1").fadeIn(300);
	startSlider();
});

function startSlider() {
	count = $("#slidebox>img").size();

	backfun = setInterval(function(){
		if(sliderNext > count) {
			sliderNext = 1;
			sliderInt = 1;
		}
		$("#slidebox>img").fadeOut(300);
		$("#slidebox>img#" + sliderNext).fadeIn(300);
		sliderInt = sliderNext;
		sliderNext = sliderNext + 1;
	}, 3000);
}