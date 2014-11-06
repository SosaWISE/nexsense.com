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


nexsense.factory("FormValidation", function() {
	return {
		phone: /^([0-9]{3}|\([0-9]{3}\))[\-\.\s]?[0-9]{3}[\-\.\s]?[0-9]{4}$/,
		email: /^[a-zA-Z0-9\-_\.]+@[a-zA-Z0-9\-_\.]+\.[a-zA-Z]+$/,
		zip: /^[0-9]{5}$/,
	}
});

nexsense.factory("States", function() {
	return {
		statelist: [
			{ code:'AL', name:'Alabama' },
			{ code:'AK', name:'Alaska' },
			{ code:'AZ', name:'Arizona' },
			{ code:'AR', name:'Arkansas' },
			{ code:'CA', name:'California' },
			{ code:'CO', name:'Colorado' },
			{ code:'CT', name:'Connecticut' },
			{ code:'DE', name:'Delaware' },
			{ code:'FL', name:'Florida' },
			{ code:'GA', name:'Georgia' },

			{ code:'HI', name:'Hawaii' },
			{ code:'ID', name:'Idaho' },
			{ code:'IL', name:'Illinois' },
			{ code:'IN', name:'Indiana' },
			{ code:'IA', name:'Iowa' },
			{ code:'KS', name:'Kansas' },
			{ code:'KY', name:'Kentucky' },
			{ code:'LA', name:'Louisiana' },
			{ code:'ME', name:'Maine' },
			{ code:'MD', name:'Maryland' },

			{ code:'MA', name:'Massachusetts' },
			{ code:'MI', name:'Michigan' },
			{ code:'MN', name:'Minnesota' },
			{ code:'MS', name:'Mississippi' },
			{ code:'MO', name:'Missouri' },
			{ code:'MT', name:'Montana' },
			{ code:'NE', name:'Nebraska' },
			{ code:'NV', name:'Nevada' },
			{ code:'NH', name:'New Hampshire' },
			{ code:'NJ', name:'New Jersey' },

			{ code:'NM', name:'New Mexico' },
			{ code:'NY', name:'New York' },
			{ code:'NC', name:'North Carolina' },
			{ code:'ND', name:'North Dakota' },
			{ code:'OH', name:'Ohio' },
			{ code:'OK', name:'Oklahoma' },
			{ code:'OR', name:'Oregon' },
			{ code:'PA', name:'Pennsylvania' },
			{ code:'RI', name:'Rhode Island' },
			{ code:'SC', name:'South Carolina' },

			{ code:'SD', name:'South Dakota' },
			{ code:'TN', name:'Tennessee' },
			{ code:'TX', name:'Texas' },
			{ code:'UT', name:'Utah' },
			{ code:'VT', name:'Vermont' },
			{ code:'VA', name:'Virginia' },
			{ code:'WA', name:'Washington' },
			{ code:'WV', name:'West Virginia' },
			{ code:'WI', name:'Wisconsin' },
			{ code:'WY', name:'Wyoming' },
		]
	}
});

nexsense.controller("FooterController", ['$scope', '$http', function($scope, $http) {
	$scope.email = '';

	$scope.thanksbannerX = -100;

	$scope.signUpForNewsletter = function() {
		footeranimator = setInterval(animateFrame, 30);
		$http.post('newsletter-signup.php',
			{
				email: $scope.email,
			}
		).success(function(data) {
			console.log(data);
		}).error(function(data) {
			displayMessage("There was an error trying to sign you up for the newsletter.  Try again.");
		});
	}

	var footeranimator = null;
	function animateFrame() {
		$scope.$apply(function() {
			$scope.thanksbannerX += 2;
			if ($scope.thanksbannerX >= 0) {
				$scope.thanksbannerX = 0;
				clearInterval(footeranimator);
			}
		});
	}

}]);
