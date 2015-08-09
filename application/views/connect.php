<!-- content topmenu -->
<div class="ui large fixed secondary sticky menu ontop">
	<div class="ui container">
		<a href="<?php echo base_url('home') ?>" class="item">
			<i class="heart icon"></i>
		</a>
		<a href="<?php echo base_url('home/connect') ?>" class="active item">
			Connect
		</a>
		<a href="<?php echo base_url('home/seek') ?>" class="item">
			Seek
		</a>
		<a href="<?php echo base_url('home/identify') ?>" class="item">
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
			</button>
		</div>
	</div>
</div>

<!-- content masthead -->
<div id="content-masthead-connect" class="content-masthead">
	<div class="ui container">
		<div class="header">
			<img src="<?php echo base_url('img/bluemix.svg'); ?>" class="ui avatar spaced image">
			<span class="highlight">Connect</span> with a Doctor
		</div>
	</div>
</div>

<div id="content-connect" class="ui text container">
	<!-- input field for bluemix query -->
	<form id="connect-form" action="" method="GET">
		<div class="ui fluid large action input">
			<input placeholder="Ask a question here..." type="text">
			<button type="submit" class="ui large blue right labeled icon button">
				<i class="comments icon"></i>
				Ask
			</button>
		</div>
	</form>

	<!-- output field for displaying fetched content -->
	<div class="ui icon message">
		<i class="quote left icon"></i>
		<div class="content">
			<div id="connect-query" class="header">
				Type in a question above.
			</div>
		</div>
	</div>
	<div class="ui icon blue message">
		<i class="quote right icon"></i>
		<div class="content">
			<div id="connect-result" class="ui segment">
				An answer will appear here!
			</div>
		</div>
	</div>

	<br/>
	<h1>-OR-</h1>
	<button class="ui button" id="talk">Talk to our partner doctors!</button>
	<p>And schedule an appointment with them.</p>

	<div class="ui modal">
		<i class="close icon"></i>
		<div class="header">
			Please provide your information and we will send you a text message for your appointment details.
		</div>
		<div class="content">
			<?php echo form_open(base_url('home/appointment'), array('method' => 'POST')); ?>
			<div class="ui form">
				<div class="field">
					<label>Name</label>
					<input type="text" name="name">
				</div>
				<div class="field">
					<label>Mobile Number</label>
					<input type="text" name="number">
				</div>
			</div>
		</div>
		<div class="actions">
			<button class="ui button" name="submit">
			Submit
			</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<!-- load page-specific custom js -->
<script type="text/javascript" src="<?php echo base_url('js/connect.js') ?>"></script>

<!-- temporary page fillers -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
