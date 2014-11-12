		nexsense.controller("CareersPage", ['$scope', '$http', '$sce', '$window', 'FormValidation', function($scope, $http, $sce, $window, validation) {
			$scope.validation = validation;

			$scope.jobs = [
				{
					id: 'customer-service-rep',
					title: 'Customer Service Rep',
					blurb: "Now looking for outgoing personalities who can think on their feet and make someone say, \"wow\" every single day.",
					url: 'https://nexsense.applicantpro.com/jobs/148967-37068.html',
					description: null,
				},
				{
					id: 'inside-sales-rep',
					title: 'Inside Sales Rep',
					blurb: "If you can close a deal and have a fun personality that matches with our family culture, we’d like to learn more about you.",
					url: 'https://nexsense.applicantpro.com/jobs/149893-37068.html',
					description: null,
				},
				{
					id: 'outside-sales-rep',
					title: 'Outside Sales Rep',
					blurb: "Now searching for Outside Sales reps who are ready to do more than just be an Outside Sales Rep.",
					url: 'sell-for-nexsense',
					description: null,
				},
			];
			$scope.activejob = null;

			$scope.setActiveJob = function(job) {
				if ($scope.activejob == job) {
					$scope.activejob = null;
					return;
				}
				$scope.activejob = job;
				if (!$scope.activejob.description) {
					$http.get("/assets/jobs/" + $scope.activejob.id + ".html", {}).
					success(function(data) {
						$scope.activejob.description = $sce.trustAsHtml(data);
					}).error(function(data) {
						console.log("error getting job description");
					});
				}
			}

			$scope.navigateTo = function(url) {
				$window.location = url;
			}

		}]);

