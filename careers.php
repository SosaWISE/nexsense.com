<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Nexsense offers careers to people who are laid-back, self-starting, and gung-ho about changing the way people think about home automation and security." />
	<meta name="keywords" content="Nexsense, careers, jobs, home security, alarm system, home automation, home management, home control, smart home" />
	<title>Careers | Nexsense</title>

	<script type="text/javascript" language="javascript" src="assets/js/careers.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/careers.css" />

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>

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
							<div>
								<h2 class="toggle job-title" ng-click="setActiveJob(job)">{{job.title}}</h2>
								<span class="job-location">{{job.location}}</span>
							</div>
							<div class="job-description">
								{{job.blurb}}
								<input type="button" class="small tertiary" ng-click="setActiveJob(job)" ng-show="activejob!=job" value="more" />
							</div>
							<div class="full-job-description" ng-show="activejob==job">
								<div ng-bind-html="job.description"></div>
								<div class="button-footer"><input type="button" class="chevron" ng-click="navigateTo(job.url)" value="apply" /></div>
								<div class="complement-divider"></div>
							</div>
						</div>
					</div>


					<p>
						We always want to stay connected with talented people.  If you'd like a career that makes a difference and you're excited to work hard and play hard, send us your resume so we can get connected.  We'd love to expand our network as much as you.
						<div class="button-footer"><input type="button" class="chevron" ng-click="navigateTo('https://nexsense.applicantpro.com/jobs/185043-37067.html')" value="apply" /></div>
						<div class="complement-divider"></div>
					</p>

				</div>
			</div>
		</div>

		<?php include('templates/footer.php');?>

	</div>
</body>
</html>
