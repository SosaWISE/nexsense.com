<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Nexsense offers safety solutions that match your home and your lifestyle." />
	<meta name="keywords" content="Nexsense, tell a friend, referrals, home security, alarm system, home automation, home management, home control" />
	<title>Refer your friends | Nexsense</title>

	<script type="text/javascript" language="javascript" src="assets/js/referrals.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/referrals.css" />

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>

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
									<div class="flex-half left"><input type="text" class="stretch" name="ref_customerId" ng-model="ref_customerId" placeholder="Customer ID" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
									<div class="flex-half right"></div>
									<div class="flex-full">OR</div>
									<div class="flex-half left"><input type="text" class="stretch" name="ref_firstName" ng-model="ref_firstName" placeholder="First name" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
									<div class="flex-half right"><input type="text" class="stretch" name="ref_lastName" ng-model="ref_lastName" placeholder="Last name" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
									<div class="flex-full"><input type="text" class="stretch" name="ref_address" ng-model="ref_address" placeholder="Address" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
									<div class="flex-full"><input type="text" class="stretch" name="ref_address2" ng-model="ref_address2" placeholder="Address Line 2" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
									<div class="flex-full"><input type="text" class="stretch" name="ref_city" ng-model="ref_city" placeholder="City" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
									<div class="flex-half left"><select class="stretch" ng-model="ref_state" ng-options="s.code as s.name for s in states"></select></div>
									<div class="flex-half right"><input type="text" class="stretch" name="ref_zip" ng-model="ref_zip" placeholder="Zip" ng-class="{warning:(submitAttempted && noReferrer)}" /></div>
								</div>
							</div>
							<div class="flex-half purple">
								<h2 class="complement">Referee</h2>
								Tell us a little about who’s interested in Nexsense.

								<div class="flex-row inputs" id="referral-form">
									<div class="flex-half left"><input type="text" class="stretch" name="firstName" ng-model="firstName" placeholder="First name" ng-class="{warning:(referralForm.firstName.$invalid && (referralForm.firstName.$dirty || submitAttempted))}" required /></div>
									<div class="flex-half right"><input type="text" class="stretch" name="lastName" ng-model="lastName" placeholder="Last name" ng-class="{warning:(referralForm.lastName.$invalid && (referralForm.lastName.$dirty || submitAttempted))}" required /></div>
									<div class="flex-full"><input type="text" class="stretch" name="address" ng-model="address" placeholder="Address" ng-class="{warning:(referralForm.address.$invalid && (referralForm.address.$dirty || submitAttempted))}" required /></div>
									<div class="flex-full"><input type="text" class="stretch" name="address2" ng-model="address2" placeholder="Address Line 2" /></div>
									<div class="flex-full"><input type="text" class="stretch" name="city" ng-model="city" placeholder="City" ng-class="{warning:(referralForm.city.$invalid && (referralForm.city.$dirty || submitAttempted))}" required /></div>
									<div class="flex-half left"><select class="stretch" ng-model="state" ng-options="s.code as s.name for s in states"></select></div>
									<div class="flex-half right"><input type="text" class="stretch" ng-pattern="validation.zip" name="zip" ng-model="zip" placeholder="Zip" ng-class="{warning:(referralForm.zip.$invalid && (referralForm.zip.$dirty || submitAttempted))}" required /></div>
									<div class="flex-half left"><input type="text" class="stretch" ng-pattern="validation.phone" name="phone" ng-model="phone" placeholder="Phone" ng-class="{warning:(referralForm.phone.$invalid && (referralForm.phone.$dirty || submitAttempted))}" required /></div>
									<div class="flex-half right"><input type="email" class="stretch" name="email" ng-model="email" placeholder="Email" ng-class="{warning:(referralForm.email.$invalid && (referralForm.email.$dirty || submitAttempted))}" required /></div>
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

		<?php include('templates/footer.php');?>

	</div>

</body>
</html>
