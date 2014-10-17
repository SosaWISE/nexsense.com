<?php
	$title="choose your system | nexsense"; 
	$css = 'sell-for-nexsense.css' 
?>
<?php include('header.php');?>
	<div class="choose-your-system">
		<div class="hero-mini extended">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
					</div>
				</div>
			</div>
		</div>
		<div class="options-section" ng-controller="SellForNexsensePage">
			<div class="container">
				<div class="row">
					<div class="choose-your-system-intro col-xs-12">
						<h1>Now hiring lean, mean selling machines.</h1>
						<p>Candidates must also be laid-back, self-starting, and gung-ho about changing the way people think about home automation and security.</p>

						<p>If you think you've got what it takes, apply today.</p>
					</div>
				</div>
				<div class="purple">
					<form id="appForm" name="appForm">
						<h4>Apply now</h4>
						<div class="flex-row">
							<div class="flex-half margin"><input type="text" name="firstName" ng-model="firstName" ng-class="{warning:(appForm.firstName.$invalid && (appForm.firstName.$dirty || submitAttempted))}" placeholder="First name" max-length="40" required/></div>
							<div class="flex-half margin"><input type="text" name="lastName" ng-model="lastName" ng-class="{warning:(appForm.lastName.$invalid && (appForm.lastName.$dirty || submitAttempted))}" placeholder="Last name" max-length="40" required/></div>
						</div>
						<div class="flex-row">
							<div class="flex-quarter margin"><input type="text" name="phone" ng-model="phone" ng-class="{warning:(appForm.firstName.$invalid && (appForm.firstName.$dirty || submitAttempted))}" placeholder="Phone" max-length="15" required/></div>
							<div class="flex-half margin"><input type="text" name="email" ng-model="email" ng-class="{warning:(appForm.firstName.$invalid && (appForm.firstName.$dirty || submitAttempted))}" placeholder="Email" max-length="40" required/></div>
							<div class="flex-quarter margin"><input type="text" name="zip" ng-model="zip" ng-class="{warning:(appForm.firstName.$invalid && (appForm.firstName.$dirty || submitAttempted))}" placeholder="Zip code" max-length="6" required/></div>
						</div>

						<div class="application-question">
							<div class="flex-row">
								<div>Do you have experience selling home security systems?</div>
								<div class="radio-container">
									<input id="selling-exp-yes" type="radio" ng-model="hasExperience" name="selling-exp" value="yes" /> Yes
								</div>
								<div class="radio-container">
									<input id="selling-exp-no" type="radio" ng-model="hasExperience" name="selling-exp" value="no" /> No
								</div>
							</div>
						</div>

						<div class="application-button" ng-show="step==1">
							<button class="btn btn-secondary" ng-click="step=2" onclick="return false;">Continue <i></i></button>
						</div>

						<div ng-show="step==2 && hasExperience=='yes'">
							<div class="application-question">
								What company and how long?

								<table id="work-history">
									<thead>
										<tr>
											<th>Company</th>
											<th>Years worked</th>
											<th>Annual sales</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat="wk in workHistory">
											<td><input type="text" ng-model="wk.companyName" /></td>
											<td><input type="number" ng-model="wk.yearsWorked" min="0" max="50" /></td>
											<td><input type="number" ng-model="wk.annualSales" min="0" max="1000" /></td>
											<td class="remove-work-history" ng-show="workHistory.indexOf(wk)!=0" ng-click="removeWorkHistory(workHistory.indexOf(wk))"><img src="/assets/images/subtract.png" title="Remove work history" /></td>
											<td ng-show="workHistory.indexOf(wk)==0"></td>
										</tr>
									</tbody>
								</table>

								<div id="add-company" ng-click="addWorkHistory()"><img src="/assets/images/add.png" /> Add another company</div>

							</div>
						</div>

						<div ng-show="step==2 && hasExperience=='no'">
							<div class="application-question">
								Do you have other sales experience?  Tell us about it.
								<div><input type="text" ng-model="salesExperience" max-length="140" /></div>
							</div>
						</div>

						<div ng-show="step==2">
							<div class="application-question">
								Sell yourself in 140 characters or less.
								<div><textarea ng-model="sellYourself" ng-keyup="updateCharsRemaining()" ng-class="{warning:(appForm.firstName.$invalid && (appForm.firstName.$dirty || submitAttempted))}" required></textarea></div>
								<div id="chars-remaining">140 characters remaining</div>
							</div>

							<div class="application-question">
								<div class="file">
									<input id="resumeFile" type="file" onchange="angular.element(this).scope().useResume(this)" />
								</div>
								<div>
									<input type="button" class="secondary" value="Browse..." ng-click="chooseResume('resumeFile')" />
									<span>{{resumeFilename}}</span>
								</div>
							</div>

							<div class="application-button">
								<button class="btn btn-secondary" ng-click="submitApplication()" onclick="return false;" ng-show="!isSubmitting">Submit <i></i></button>
								<div id="application-wait" ng-show="isSubmitting"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" language="javascript">

		nexsense.controller("SellForNexsensePage", ['$scope', '$http', function($scope, $http) {
			$scope.hasExperience = 'no';
			$scope.firstName = '';
			$scope.lastName = '';
			$scope.phone = '';
			$scope.email = '';
			$scope.zip = '';

			$scope.salesExperience = '';
			$scope.sellYourself = '';

			$scope.resumeData = '';
			$scope.resumeFilename = '';

			$scope.step = 1;
			$scope.isSubmitting = false;

			$scope.submitAttempted = false;

			$scope.workHistory = [
				{companyName: '', yearsWorked:0, annualSales: 0}
			];

			$scope.addWorkHistory = function() {
				$scope.workHistory.push({companyName: '', yearsWorked:0, annualSales: 0});
			}

			$scope.removeWorkHistory = function(idx) {
				$scope.workHistory.splice(idx, 1);
			}

			// Count the characters used in the Sell Yourself textarea and report to the user how many he has left
			$scope.updateCharsRemaining = function() {
				var allowedChars = 140;
				var chars = $scope.sellYourself.length;
				var availableChars = allowedChars - chars;

				var text = availableChars + " characters remaining";
				if (Math.abs(availableChars) == 1)
					text = availableChars + " character remaining";
				document.getElementById('chars-remaining').innerHTML = text;
				if (availableChars < 0)
					document.getElementById('chars-remaining').className = "warning";
				else
					document.getElementById('chars-remaining').className = null;
			}

			$scope.chooseResume = function(elId) {
				document.getElementById(elId).click();
			}

			$scope.useResume = function(fileInput) {
				console.log('got resume');

				var reader = new FileReader();
				reader.onload = function(e) {
					$scope.resumeData = e.target.result;
					$scope.$apply(function() {
						$scope.resumeFilename = fileInput.value;
					});
				}
				reader.readAsDataURL(fileInput.files[0]);
			}


			// Validate and submit the application
			$scope.submitApplication = function() {
				$scope.submitAttempted = true;

				if (!$scope.appForm.$valid) {
					displayMessage("There were some problems with your application.  Please check your information and try again.", true);
					return;
				}

				var postData = {
					firstName: $scope.firstName,
					lastName: $scope.lastName,
					phone: $scope.phone,
					email: $scope.email,
					resume: $scope.resumeData,
				}
				if ($scope.hasExperience) {
					postData.workHistory = $scope.workHistory;
				}
				else {
					postData.salesExperience = $scope.salesExperience;
				}

				// replace the submit button with a wait icon
				$scope.isSubmitting = true;

				// send the application
				$http({
					method: 'POST',
					url: '/upload-resume.php',
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: postData
				}).
				success(function(data, status, headers, config) {
					console.log("success");
					console.log(data);
					displayMessage("Your application was successfully sent to Nexsense.  Thanks for applying.");
					$scope.isSubmitting = false;
				}).error(function(data, status, headers, config) {
					console.log("ERROR");
					console.log(data);
					displayMessage("There was a problem submitting your application.  Please ensure all fields are complete.", true);
					$scope.isSubmitting = false;
				});
			}

			// create a wait indicator for when the user presses the submit button
			angular.element(window).bind('load', function() {
                $scope.applicationWaitSpinner = new WaitIndicatorSpinner(document.getElementById('application-wait'), stdWaitIndicatorWidth, stdWaitIndicatorHeight, stdWaitIndicatorOpts);
            });
		}]);
	</script>
<?php include('footer.php');?>