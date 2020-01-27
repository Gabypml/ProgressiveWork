
var mainText;


var screenWidth, screenHeight;

var timeline;

	screenWidth = window.innerWidth;
	screenHeight = window.innerHeight;

//Initialize function
var init = function () {
    // TODO:: Do your initialization job

	// assign the DOM objects to the variables

    mainText = document.getElementById("maintext");
    
    
    timeline = new TimelineMax(); // Create a new TimelineMax object
    
    // next append TweenMax animations to play one after another using TimelineMax and the DOM objects
    
	    //timeline.append(new TweenMax(mainText, 0.75, {css:{opacity:"1"}, ease:Quad.easeIn}));
	    timeline.append(new TweenMax(mainText, 1, {css:{left:screenWidth/2 - mainText.offsetWidth/2 + "px"}, ease:Elastic.easeInOut }));
	    timeline.append(new TweenMax(mainText, 0.75, {delay: 0.4, css:{top:screenHeight/2 - mainText.offsetHeight/2 + "px"}, ease:Bounce.easeOut}));
	    timeline.append(new TweenMax(mainText, 0.75, {delay: 1, css:{color:"#ffffff"}, ease:Sine.easeOut}));
	   
	    
	    timeline.append(new TweenMax.to(mainText, 0.5, {css:{scale:1.2}, repeat: -1, yoyo:true}));
	    
	// add a listener to the restart image to restart the animation
	    restart.onclick = restart.ontap = function() {
			timeline.restart();
		}
	
    // add eventListener for tizenhwkey
    document.addEventListener('tizenhwkey', function(e) {
        if(e.keyName == "back")
            tizen.application.getCurrentApplication().exit();
    });
    
};
// window.onload can work without <body onload="">
window.onload = init;