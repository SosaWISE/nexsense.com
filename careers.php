<?php
	$title="careers | nexsense"; 
	$css = 'careers.css' 
?>
<?php include('header.php');?>
	<div class="content">
		<div class="purple">
			<div class="careers-hero">
				<div class="justified-title">
					<h1 class="invert">Work at Nexsense</h1>
					Because Sarah and Ben do.
				</div>
			</div>
		</div>
		<div class="options-section" ng-controller="CareersPage">
			<div class="container">

				<h1>We're Hiring</h1>
				Protecting our culture at Nexsense is of utmost importance. Candidates are weighted 60% on culture fit and 40% on hard skills. When candidates apply, they are asked to answer culture questions. Candidates who do not respond to these questions are not considered for employment. During the interview process candidates are encouraged to show their personality and demonstrate enthusiasm for our core values.

				<p>
					Here's a list of the currently available positions within our company.
				</p>

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
					blurb: "Our Customer Service Reps will be delivering \"wow\" to our Customers on a daily basis.",
					url: 'https://nexsense.applicantpro.com/jobs/148967-37068.html',
					description: null,
				},
				{
					id: 'inside-sales-rep',
					title: 'Inside Sales Rep',
					blurb: "Have experience in sales? In our corporate office in Orem, UT we need experienced sales reps to close deals on inbound and outbound calls.",
					url: 'https://nexsense.applicantpro.com/jobs/149893-37068.html',
					description: null,
				},
				{
					id: 'outside-sales-rep',
					title: 'Outside Sales Rep',
					blurb: "Tired of moving every summer to sell the same old systems?  Selling for Nexsense is a different experience.  Live in your own house and work year-round.",
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
