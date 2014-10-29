<?php
	$title="careers | nexsense"; 
	$css = 'careers.css' 
?>
<?php include('header.php');?>
	<div class="content">
		<div class="purple">
			<div class="careers-hero">
				<div class="justified-title">
					<h1 class="complement">Now hiring awesomeness.</h1>
					In other words, people who are laid-back, self-starting, and gung-ho about changing the way people think about home automation and security.
				</div>
			</div>
		</div>
		<div class="options-section" ng-controller="CareersPage">
			<div class="container">

				<h1>Work hard. Play hard.</h1>
				The truth is, we spend as much time with the people we work with as our own family. That’s why it’s important for us to hire talented folks with awesome personalities that fit into the culture of our family. If you believe in promoting peace of mind and happiness by creating a safer and simpler world, we want to hear from you.

				<p>Here’s a list of our current job openings:</p>

				<div id="all-jobs">

					<div class="job" ng-repeat="job in jobs">
						<h2 class="toggle" ng-click="setActiveJob(job)">{{job.title}}</h2>
						<div class="job-description">
							{{job.blurb}}
							<input type="button" class="small tertiary" ng-click="setActiveJob(job)" ng-show="activejob.id!=job.id" value="more" />
						</div>
						<div class="full-job-description" ng-show="activejob.id==job.id">
							<div ng-bind-html="job.description"></div>
							<div class="button-footer"><input type="button" class="chevron" ng-click="navigateTo(job.url)" value="apply" /></div>
							<div class="complement-divider"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript" language="javascript">

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


	</script>
<?php include('footer.php');?>
