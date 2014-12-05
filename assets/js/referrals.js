		nexsense.controller("ReferralsPage", ['$scope', '$http', '$sce', '$window', 'FormValidation', 'States', function($scope, $http, $sce, $window, validation, states) {
			$scope.validation = validation;
			$scope.states = states.statelist;

			$scope.resetvars = function() {
				$scope.isSubmitting = false;
				$scope.ref_customerId = '';
				$scope.ref_firstName = '';
				$scope.ref_lastName = '';
				$scope.ref_address = '';
				$scope.ref_address2 = '';
				$scope.ref_city = '';
				$scope.ref_state = 'UT';
				$scope.ref_zip = '';
				$scope.firstName = '';
				$scope.lastName = '';
				$scope.address = '';
				$scope.address2 = '';
				$scope.city = '';
				$scope.state = 'UT';
				$scope.zip = '';
				$scope.phone = '';
				$scope.email = '';
			}
			$scope.resetvars();


			// Validate and submit the application
			$scope.submitReferral = function() {
				$scope.submitAttempted = true;
				$scope.noReferrer = false;
				$scope.isValid = true;

				if (!$scope.ref_customerId && (!$scope.ref_firstName || !$scope.ref_lastName || !$scope.ref_address || !$scope.ref_city || !$scope.ref_zip)) {
					$scope.noReferrer = true;
					$scope.isValid = false;
				}

				if (!$scope.referralForm.$valid || !$scope.isValid) {
					displayMessage("There were some problems with your referral.  Please check your information and try again.", true);
					return;
				}


				var postData = {
					ref_customerId: $scope.ref_customerId,
					ref_firstName: $scope.ref_firstName,
					ref_lastName: $scope.ref_lastName,
					ref_address: $scope.ref_address,
					ref_address2: $scope.ref_address2,
					ref_city: $scope.ref_city,
					ref_state: $scope.ref_state,
					ref_zip: $scope.ref_zip,

					firstName: $scope.firstName,
					lastName: $scope.lastName,
					address: $scope.address,
					address2: $scope.address2,
					city: $scope.city,
					state: $scope.state,
					zip: $scope.zip,
					phone: $scope.phone,
					email: $scope.email,
				}

				// replace the submit button with a wait icon
				$scope.isSubmitting = true;

				// send the application
				$http({
					method: 'POST',
					url: '/model/submit-referral.php',
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: postData
				}).
				success(function(data, status, headers, config) {
					//console.log("success");
					//console.log(data);
					displayMessage("Your referral was successfully sent to Nexsense.  Thanks for sharing!");
					$scope.isSubmitting = false;
					$scope.resetvars();
					$scope.referralForm.$setPristine();
				}).error(function(data, status, headers, config) {
					//console.log("ERROR");
					//console.log(data);
					displayMessage("There was a problem submitting your referral.  Please ensure all fields are complete.", true);
					$scope.isSubmitting = false;
				});
			}

			// create a wait indicator for when the user presses the submit button
			angular.element(window).bind('load', function() {
                $scope.applicationWaitSpinner = new WaitIndicatorSpinner(document.getElementById('submit-wait'), stdWaitIndicatorWidth, stdWaitIndicatorHeight, stdWaitIndicatorOpts);
            });

		}]);


