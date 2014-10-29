<?php
	$title="referrals | nexsense"; 
	$css = 'referrals.css' 
?>
<?php include('header.php');?>
	<div class="content">
		<div>
			<div class="referrals-hero">
				<div class="justified-title">
					<h1 class="complement">Spread the word.<br/>Get $100.</h1>
				</div>
			</div>
		</div>
		<div class="options-section" ng-controller="ReferralsPage">
			<div class="container">

				<h1>If you like us, don’t be shy.</h1>
				Tell the neighbor, tell a friend, tell a family member. When they install a Nexsense system into their home, you get $100 and they get free activation!*
				<p>If you're here to refer someone, or someone told you about us, fill out the form below.</p>

				<form name="referralForm">
					<div class="flex-row" id="forms">
						<div class="flex-half purple">
							<h2 class="complement">Referrer</h2>
							Tell us a little about who’s spreading the word about Nexsense.

							<div class="flex-row inputs" id="referrer-form">
								<div class="flex-half left"><input type="text" name="ref_customerId" ng-model="ref_customerId" placeholder="Customer ID" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								<div class="flex-half right"></div>
								<div class="flex-full">OR</div>
								<div class="flex-half left"><input type="text" name="ref_firstName" ng-model="ref_firstName" placeholder="First name" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								<div class="flex-half right"><input type="text" name="ref_lastName" ng-model="ref_lastName" placeholder="Last name" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								<div class="flex-full"><input type="text" name="ref_address" ng-model="ref_address" placeholder="Address" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								<div class="flex-full"><input type="text" name="ref_address2" ng-model="ref_address2" placeholder="Address Line 2" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								<div class="flex-full"><input type="text" name="ref_city" ng-model="ref_city" placeholder="City" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								<div class="flex-half left"><select ng-model="ref_state" ng-options="s.code as s.name for s in states"></select></div>
								<div class="flex-half right"><input type="text" name="ref_zip" ng-model="ref_zip" placeholder="Zip" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
							</div>
						</div>
						<div class="flex-half purple">
							<h2 class="complement">Referee</h2>
							Tell us a little about who’s interested in Nexsense.

							<div class="flex-row inputs" id="referral-form">
								<div class="flex-half left"><input type="text" name="firstName" ng-model="firstName" placeholder="First name" ng-class="{warning:(referralForm.firstName.$invalid && (referralForm.firstName.$dirty || submitAttempted))}" required /></div>
								<div class="flex-half right"><input type="text" name="lastName" ng-model="lastName" placeholder="Last name" ng-class="{warning:(referralForm.lastName.$invalid && (referralForm.lastName.$dirty || submitAttempted))}" required /></div>
								<div class="flex-full"><input type="text" name="address" ng-model="address" placeholder="Address" ng-class="{warning:(referralForm.address.$invalid && (referralForm.address.$dirty || submitAttempted))}" required /></div>
								<div class="flex-full"><input type="text" name="address2" ng-model="address2" placeholder="Address Line 2" /></div>
								<div class="flex-full"><input type="text" name="city" ng-model="city" placeholder="City" ng-class="{warning:(referralForm.city.$invalid && (referralForm.city.$dirty || submitAttempted))}" required /></div>
								<div class="flex-half left"><select ng-model="state" ng-options="s.code as s.name for s in states"></select></div>
								<div class="flex-half right"><input type="text" ng-pattern="validation.zip" name="zip" ng-model="zip" placeholder="Zip" ng-class="{warning:(referralForm.zip.$invalid && (referralForm.zip.$dirty || submitAttempted))}" required /></div>
								<div class="flex-half left"><input type="text" ng-pattern="validation.phone" name="phone" ng-model="phone" placeholder="Phone" ng-class="{warning:(referralForm.phone.$invalid && (referralForm.phone.$dirty || submitAttempted))}" required /></div>
								<div class="flex-half right"><input type="email" name="email" ng-model="email" placeholder="Email" ng-class="{warning:(referralForm.email.$invalid && (referralForm.email.$dirty || submitAttempted))}" required /></div>
								<div class="flex-full form-button">
									<div id="submit-wait" ng-show="isSubmitting"></div>
									<input type="button" ng-show="!isSubmitting" class="secondary chevron" value="Submit" ng-click="submitReferral();" ng-disabled="isSubmitting" />
								</div>
							</div>
						</div>
					</div>
				</form>

				<p>*Free activation dependent on credit check.</p>
			</div>
		</div>
	</div>
	<script type="text/javascript" language="javascript">

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
					url: '/submit-referral.php',
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: postData
				}).
				success(function(data, status, headers, config) {
					console.log("success");
					console.log(data);
					displayMessage("Your referral was successfully sent to Nexsense.  Thanks for sharing!");
					//$scope.isSubmitting = false;
					$scope.resetvars();
					$scope.referralForm.$setPristine();
				}).error(function(data, status, headers, config) {
					console.log("ERROR");
					console.log(data);
					displayMessage("There was a problem submitting your referral.  Please ensure all fields are complete.", true);
					//$scope.isSubmitting = false;
				});
			}

			// create a wait indicator for when the user presses the submit button
			angular.element(window).bind('load', function() {
                $scope.applicationWaitSpinner = new WaitIndicatorSpinner(document.getElementById('submit-wait'), stdWaitIndicatorWidth, stdWaitIndicatorHeight, stdWaitIndicatorOpts);
            });

		}]);


	</script>
<?php include('footer.php');?>
