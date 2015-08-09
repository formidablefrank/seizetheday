
<div id="homepage-masthead">
	<!-- application homepage branding -->
	<div class="ui large secondary menu">
		<div class="ui container">
			<a href="<?php echo base_url('home') ?>" class="item">
				<i class="heart icon"></i> Seize the Day
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
				</button>
			</div>
		</div>
	</div>

	<!-- feature quick links -->
	<div id="quick-links" class="ui stackable centered grid container">
		<div class="five wide column">
			<div class="ui centered grid container">
				<div class="ten wide mobile fourteen wide column">
					<img class="ui fluid image" src="<?php echo base_url('img/connect.svg'); ?>">
					<br><br>
					<a href="<?php echo base_url('home/connect') ?>" class="fluid ui huge basic black button">Connect</a>
				</div>
			</div>
		</div>
		<div class="five wide column">
			<div class="ui centered grid container">
				<div class="ten wide mobile fourteen wide column">
					<img class="ui fluid image" src="<?php echo base_url('img/seek.svg'); ?>">
					<br><br>
					<a href="<?php echo base_url('home/seek') ?>" class="fluid ui huge basic black button">Seek</a>
				</div>
			</div>
		</div>
		<div class="five wide column">
			<div class="ui centered grid container">
				<div class="ten wide mobile fourteen wide column">
					<img class="ui fluid image" src="<?php echo base_url('img/identify.svg'); ?>">
					<br><br>
					<a href="<?php echo base_url('home/identify') ?>" class="fluid ui huge basic black button">Identify</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- feature overview and description -->
<div id="homepage-subhead-identify" class="homepage-subhead">
	<div class="ui grid container">
		<div class="ten wide column">
			<h1>Connect</h1>
			<p>Get instant consultations using our virtual doctor. If that is not enough,
			create appointments with local clinics. Recieve confirmation via SMS.</p>
		</div>
		<div class="six wide column">
		</div>
	</div>
</div>

<div id="homepage-subhead-study" class="homepage-subhead">
	<div class="ui grid container">
		<div class="six wide column">
		</div>
		<div class="ten wide column">
			<h1>Seek</h1>
			<p>Read already answered questions and learn about sex!</p>
		</div>
	</div>
</div>
<div id="homepage-subhead-connect" class="homepage-subhead">
	<div class="ui grid container">
		<div class="ten wide column">
			<h1>Identify</h1>
			<p>Do you think you have an STD? We will help you see if you need a doctor.</p>
		</div>
		<div class="six wide column">
		</div>
	</div>
</div>

<div id="homepage-footer">
	<div class="ui center aligned text container">
		<span class="heading csi">UP<b>CSI</b></span>
		<span class="heading ah"><b>AngelHacks 2015</b></span>
		<div class="ui divider"></div>
		<span class="content">
			<a href="https://github.com/formidablefrank/seizetheday" class="footer-link">GitHub Repository</a> ·
			<a href="http://www.hackathon.io/seizetheday-std" class="footer-link">Hackathon.io Page</a>
		</span>
	</div>
</div>

<!-- // temporarily comment out for faster local loading
<script src="http://js.api.here.com/se/2.5.4/jsl.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url('js/map.js'); ?>"></script>
-->
<!-- TODO: store lat and lon in session var -->

<script type="text/javascript" src="<?php echo base_url('js/fbshare.js'); ?>"></script>
