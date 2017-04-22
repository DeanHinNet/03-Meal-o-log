<?php
session_start();

?>
<html>
<head>
	<title>Meal-a-log!</title>
	<!--
	New User Add Stats
	-->
</head>
<link rel='stylesheet' type='text/css' href='main.css'>
<style>

</style>
<body>
	<div class='wrapper'>
		<div id='header'>
			<div id='display_date'></div>
			<div id='progress_day'></div>
			<div id='weight_start'></div>
			<div id='weight_target'></div>
			<button id='show_weekly'>Show Weekly Summary</button>
		</div>
		<div id='user_inputs'>
			<form action='process.php' method='post'>
				<section>
					<label for='dob'>DOB</label>
					<input id='dob' type='text' name='dob'>
				</section>
				<section>
					<label for='weight'>Starting Weight</label>
					<input id='weight' type='text' name='weight'>
					<label for='goal'>Goal Weight</label>
					<input id='goal_weight' type='text' name='goal_weight'>
				</section>
				<section>
					<label for='fat'>Body Fat %</label>
					<input id='fat' type='text' name='fat'>
					<label for='goal_fat'>Goal %</label>
					<input id='goal_fat'type='text' name='goal_fat'>
				</section>
				<section>
					<label for='height'>Height</label>
					<input id='height' type='text' name='height'>
					<section>
						<label for='feet'>Feet</label>
						<input id='feet' type='text' name='feet'>
						<label for='inches'>Inches</label>
						<input id='inches' type='text' name='inches'>
					</section>
				</section>
				<section>
					<label>Picture</label><input type='text' name='profile_pic'>
				</section>
				<input type='hidden' name='action' name='initial_stats'>
				<input type='submit' value='Get Started!'>
			</form> 
		</div>
	</div>
</body>
<script>
</script>
</html>