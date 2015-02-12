<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Nexsense offers careers to experienced salesmen who want the stability of working where they live year-round." />
	<meta name="keywords" content="Nexsense, careers, jobs, sales, work, home security, alarm system, home automation, home management, home control" />
	<title>Sales Manager | Nexsense</title>

	<script type="text/javascript" language="javascript" src="/assets/js/sales-manager.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/sales-manager.css" />

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>

		<div style="margin-bottom: 60px;">
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
							<h1>Now hiring motivating sales managers.</h1>
							<p>We're looking for a few good sales managers to help open regional offices in <span class="highlight">{{areas}}</span>.</p>

							<p>Candidates must also be self-starting and gung-ho about changing the way people think about home automation and security.</p>

							<h3>Compensation</h3>
							<ul>
								<li>$50k base salary plus commissions</li>
								<li>Awesome swag</li>
								<li>Flex Hours and work/life balance</li>
								<li>Rich Health plan with a variety of options including both traditional PPO's and HSA plans</li>
								<li>Innovative and casual environment</li>
								<li>Fun atmosphere</li>

							</ul>
							<h3>Essential Duties and Responsibilities</h3>
							<ul>
								<li>Must love people and feel comfortable interacting with them on a personable level.</li>
								<li>Responsible for going door to door in order to educate customers and sell products and services.</li>
								<li>Help build a family environment by participating in team activities and recruiting events.</li>
								<li>Represent Nexsense with transparency and professionalism.</li>
								<li>Other duties as assigned, including participating in our work hard, play hard culture.</li>
								<li>Reports directly to the Outside Sales Director.</li>
							</ul>

							<h3>Qualifications</h3>
							<ul>
								<li>A college degree is preferred but not required.</li>
								<li>Previous experience selling products door to door is preferred.</li>
								<li>Must have solid communication and interpersonal skills.</li>
								<li>Computer proficiency in Windows environment. </li>
								<li>Strong attention to detail, dependability and follow through.</li>
							</ul>

							<h3>Physical Demands</h3>
							<ul>
								<li>Ability to withstand many different weather conditions.</li>
								<li>Hearing, vision and speaking within normal ranges.</li>
								<li>No heavy lifting is expected. Exertion of up to 10 lbs. of force occasionally may be required.</li>
								<li>Good manual dexterity for the use of common office equipment such as computer terminals, calculator, copiers, and FAX machines. </li>
							</ul>

							<h3>Work Environment</h3>
							Our Outside Sales Managers work with their outdoor sales team going door to door in order to help promote peace of mind and happiness by creating a safer and simpler world.

							<p>If you think you've got what it takes, apply today.</p>
						</div>
					</div>
					<div id="purpleform" class="purple">
						<form id="appForm" name="appForm">
							<h4>Apply now</h4>
							<div class="flex-row">
								<div class="flex-half margin"><input type="text" class="stretch" name="firstName" ng-model="firstName" ng-class="{warning:(appForm.firstName.$invalid && (appForm.firstName.$dirty || submitAttempted))}" placeholder="First name" max-length="40" required/></div>
								<div class="flex-half margin"><input type="text" class="stretch" name="lastName" ng-model="lastName" ng-class="{warning:(appForm.lastName.$invalid && (appForm.lastName.$dirty || submitAttempted))}" placeholder="Last name" max-length="40" required/></div>
							</div>
							<div class="flex-row">
								<div class="flex-quarter margin"><input type="phone" class="stretch" name="phone" ng-model="phone" ng-pattern="validation.phone" ng-class="{warning:(appForm.phone.$invalid && (appForm.phone.$dirty || submitAttempted))}" placeholder="Phone" max-length="15" required/></div>
								<div class="flex-half margin"><input type="email" class="stretch" name="email" ng-model="email" ng-class="{warning:(appForm.email.$invalid && (appForm.email.$dirty || submitAttempted))}" placeholder="Email" max-length="40"/></div>
								<div class="flex-quarter margin"><input type="text" class="stretch" name="zip" ng-model="zip" ng-pattern="validation.zip" ng-class="{warning:(appForm.zip.$invalid && (appForm.zip.$dirty || submitAttempted))}" placeholder="Zip code" max-length="5" required/></div>
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
									<div><input type="text" class="stretch" ng-model="salesExperience" max-length="140" /></div>
								</div>
							</div>

							<div ng-show="step==2">
								<div class="application-question">
									Sell yourself in 140 characters or less.
									<div><textarea class="stretch" ng-model="sellYourself" name="sellYourself" ng-keyup="updateCharsRemaining()" ng-class="{warning:(appForm.sellYourself.$invalid && (appForm.sellYourself.$dirty || submitAttempted))}"></textarea></div>
									<div id="chars-remaining">140 characters remaining</div>
								</div>

								<div class="application-question">
									Attach a resume if you like (optional).
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
		<?php include('templates/footer.php');?>
	</div>
</body>
</html>