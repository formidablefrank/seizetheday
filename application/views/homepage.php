
<!-- application homepage branding -->
<div class="ui container">
	<h1> <i class="heart icon"></i> Seize the Day</h1>
</div>

<!-- feature quick links -->
<div class="ui stackable centered grid container">
	<div class="five wide column">
		<div class="ui centered grid container">
			<div class="fourteen wide column">
				<img class="ui fluid image" src="<?php echo base_url('img/connect.svg'); ?>">
				<button class="fluid ui huge button"><a href="<?php echo base_url('home/connect') ?>">Connect</a></button>
			</div>
		</div>
	</div>
	<div class="five wide column">
		<div class="ui centered grid container">
			<div class="fourteen wide column">
				<img class="ui fluid image" src="<?php echo base_url('img/study.svg'); ?>">
				<button class="fluid ui huge button"><a href="<?php echo base_url('home/study') ?>">Study</a></button>
			</div>
		</div>
	</div>
	<div class="five wide column">
		<div class="ui centered grid container">
			<div class="fourteen wide column">
				<img class="ui fluid image" src="<?php echo base_url('img/identify.svg'); ?>">
				<button class="fluid ui huge button"><a href="<?php echo base_url('home/connect') ?>">Identify</a></button>
			</div>
		</div>
	</div>
</div>

<!-- feature overview and description -->
<div class="ui fluid container">
	<div class="ui divider"></div>
	<div class="ui container">
		<h2>Feature 1</h2>
		<p>Overview</p>
	</div>
</div>

<div class="ui fluid container">
	<div class="ui container">
		<div class="ui divider"></div>
		<h2>Feature 2</h2>
		<p>Overview</p>
	</div>
</div>

<div class="ui fluid container">
	<div class="ui container">
		<div class="ui divider"></div>
		<h2>Feature 3</h2>
		<p>Overview</p>
	</div>
</div>

<!-- // temporarily comment out for faster local loading
<script src="http://js.api.here.com/se/2.5.4/jsl.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url('js/map.js'); ?>"></script>
-->
<!-- TODO: store lat and lon in session var -->