var nexsense = angular.module("Nexsense", []);

var stdWaitIndicatorWidth = 40;
var stdWaitIndicatorHeight = 40;
var stdWaitIndicatorOpts = {
	color:"#fff",
	type:WaitIndicators.RoundPetalFlower,
	petals:12,
	sizeDecay:1,
	alphaDecay:0.82,
	rotationSpeed:(Math.PI*2)/1700, // radians per ms
	pulseInterval:350,
	display: true
};
