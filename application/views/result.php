<!-- content topmenu -->
<div class="ui large fixed secondary sticky menu ontop">
	<div class="ui container">
		<a href="<?php echo base_url('home') ?>" class="item">
			<i class="heart icon"></i>
		</a>
		<a href="<?php echo base_url('home/connect') ?>" class="item">
			Connect
		</a>
		<a href="<?php echo base_url('home/seek') ?>" class="item">
			Seek
		</a>
		<a href="<?php echo base_url('home/identify') ?>" class="active item">
			Identify
		</a>
		<div class="right menu">
			<button class="ui basic blue button">
					<i class="facebook icon"></i>
					Facebook
				</button>
				<button class="ui basic teal button">
					<i class="twitter icon"></i>
					Twitter
				</button>
				<button class="ui basic red button">
					<i class="google plus icon"></i>
					Google Plus
				</button>        </div>
	</div>
</div>

<!-- content masthead -->
<div id="content-masthead-seek" class="content-masthead">
	<div class="ui container">
		<div class="header">
			<span class="highlight">Identify</span> a Possible Illness
		</div>
	</div>
</div>

<!-- set description based on result -->
<?php
if($result == 'consult'){
	$result = 'Consult a doctor!'; $desc = 'We couldn\'t pinpoint what exactly it might be, so it\'s best if you get yourself checked!'; }
else if($result == 'healthy'){
	$result = 'No problem!'; $desc = 'You are healthy! However, if you have any worries, have yourself checked.'; }
else if($result == 'chlamydia'){
	$result = 'You might have chlamydia!'; $desc = "Chlamydia is one of the most common STD's. It is also easily cured. Visit a clinic!"; }
else if($result == 'HIV'){$result = 'There is a chance that you are HIV positive.'; $desc = 'Have yourself checked! You are at high risk.'; }
else if($result == 'gonorrhea'){
	$result = 'You might have gonorrhea.';  $desc = 'If left untreated, gonorrhea can cause infertility. Consult a doctor right away!'; }
else if($result == 'scabies'){
	$result = 'You probably have scabies.';  $desc = 'Scabies can and will spread to other parts of your skin if left untreated. Go to a doctor.'; }
else if($result == 'pubic lice'){
	$result = 'You most likely have pubic lice.';  $desc = 'Getting rid of your pubic hair is not enough. Get checked! Special creams may be perscribed.'; }
else if($result == 'yeast'){
	$result = 'It is likely that you have a yeast infection.';  $desc = 'People who eat a lot of sugar have higher risks of getting yeast infections. Eating yogurt and acidic food may help, but it is best to visit a doctor if you have worries.'; }
else if($result == 'herpes'){
	$result = 'You might have herpes!';  $desc = 'It is possible that you have herpes. Go to a doctor! It is very contagious.'; }
else if($result == 'syphilis'){
	$result = 'There is a good chance you have syphilis.';  $desc = 'Syphilis can lead to death if untreated. Have it checked now!'; }
else if($result == 'warts'){
	$result = 'Those might be genital warts.'; $desc = 'You have genital warts! They are causes by the Human Pappiloma Virus (HPV). Have it checked!'; }
?>

<!-- display result -->
<br><br>
<div class="ui text container">
	<?php if ($result == "No problem!") { ?>
		<div class="ui success icon message">
			<i class="check icon"></i>
			<div id="content-identify" class="content">
				<div class="header">
					<h1><?php echo $result; ?></h1>
				</div>
				<p><?php echo $desc; ?></p>
			</div>
		</div>
	<?php } else { ?>
		<div class="ui warning icon message">
			<i class="warning icon"></i>
			<div id="content-identify" class="content">
				<div class="header">
					<h1><?php echo $result; ?></h1>
				</div>
				<p><?php echo $desc; ?></p>
			</div>
		</div>
	<?php } ?>
</div>
