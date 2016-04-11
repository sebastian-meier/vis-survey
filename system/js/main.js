/*--- MOUSE RECORDER ---*/

var stop=false,
	//mouseData
	msDt = [],
	frameCount=0,
	fps = 60,
	down = false,
	fpsInterval = 1000/fps,
	then = Date.now(),
	startTime = then,
	start = new Date(),
	now,elapsed,
	currentMousePos = { x: -1, y: -1 };

$(function() {

	$(document).mousemove(function(event) {
		currentMousePos.x = event.pageX + $(window).scrollLeft();
		currentMousePos.y = event.pageY + $(window).scrollTop();
	});

	$(document).mousedown(function(event) {
		down = true;
	});

	$(document).mouseup(function(event) {
		down = false;
	});

	record();

});

function record() {
	if(!stop){requestAnimationFrame(record);}

	now = Date.now();
	elapsed = now - then;

	if ((elapsed > fpsInterval)&&(!stop)) {
		then = now - (elapsed % fpsInterval);

		var a = "up";
		if(down){a = "down";}

		if((currentMousePos != -1)&&(currentMousePos.y != -1)){
			msDt.push({a:a, x:currentMousePos.x, y:currentMousePos.y, t:Math.abs(now-startTime)});
		}
	}
}

/*--- LOG DATA BEFORE PAGE CHANGE ---*/

function logAndProceed(){
	$('input[type="submit"]').hide();
	$.post(
		'log.php',
		{
			task: 		"action",
			start : 	formatTime(start),
			end : 		formatTime(new Date()),
			time : 		(now-start),
			user_id: 	user_id,
			page: 		page,
			section: 	section,
			subsection:	subsection,
			step: 		step,
			substep: 	substep,
			mouse: 		JSON.stringify({data:msDt})
		},
		function(returnedData){
			location.replace($('form').attr('action'));
		}
	);
}

function formatTime(d){
	var iso = d.toISOString().split(".");
	var str = iso[0].split("T");
	return str[0]+" "+str[1];
}