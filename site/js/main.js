$(document).ready(function() {

/*--| QUERY LOADER
----------------------------------------------------------------------------------------------------------------------- |--*/

$("body").queryLoader2({
	barColor: "#e10c0e",
	backgroundColor: "#1c1c1c",
	percentage: true,
	barHeight: 30,
	completeAnimation: "grow"
	});



/*--| ANCHORS
------------------------------------------------------------------------------------------------------------------------ |--*/

$("a.anchorLink").anchorAnimate();

//cada vez que se recarga la página, comenzar desde cero:
	$("html, body").animate({ scrollTop: 0 },{duration: 500, queue: false} );


});