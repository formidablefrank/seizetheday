<!-- include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  $('#question').keyup(function(){
  	 var $ques = $('.ques');
  	 $ques = $(this).val();
  	 if ($ques == '') {
  	 	$ques = 'Type in a question above.';
  	 }
     $('#connect-query').text($ques);
  });
});
</script>

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

<div class="ui basic segment">
	<div id="connect-bluemix" class="ui two column middle aligned stackable grid container">
		<!-- bluemix query -->
		<div class="column">
			<!-- input field for bluemix query -->
			<form id="connect-form" action="" method="GET">
				<div class="ui fluid large action input">
					<input id="question" placeholder="Ask a question here..." type="text">
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
		</div>

		<div class="ui vertical divider">or</div>

		<div class="column">
			<div class="ui segments">
				<div class="ui segment">
					<div class="ui icon message">
						<i class="doctor icon"></i>
						<div class="content">
							Not satisfied with an artificial doctor?
							<div class="header">
								Talk with one of our partner doctors!
							</div>
						</div>
					</div>
				</div>
				<div class="ui right aligned segment">
					<button class="ui labeled icon large green button" id="talk">
						<i class="calendar icon"></i>
						Schedule an Appointment
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- appointment scheduler modal -->
<div id="connect-schedule-modal" class="ui small basic modal">
	<div class="header">
		<h2><i class="calendar icon"></i> Schedule an Appointment</h2>
	</div>
	<div class="content">
		<?php echo form_open(base_url('home/appointment'), array('method' => 'POST')); ?>
		<!-- schedule form: user information -->
		<div class="ui basic inverted form segment">
			<h3 class="section header"><i class="info icon"></i> User Information</h3>
			<p>Please provide your basic information.
				This will be sent to the attending doctor.</p>
			<div class="two fields">
				<div class="twelve wide field">
					<label>Name</label>
					<input type="text" name="name" placeholder="Juan dela Cruz">
				</div>
				<div class="four wide field">
					<label>Age</label>
					<input type="text" name="age" placeholder="21">
				</div>
			</div>
			<div class="two fields">
				<div class="six wide field">
					<label>Sex</label>
					<select class="ui fluid dropdown" name="sex">
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<div class="ten wide field">
					<label>Field of Concern</label>
					<input type="text" name="field" placeholder="Possible cardiorespiratory issue">
				</div>
			</div>
		</div>

		<!-- schedule form: contact details -->
		<div class="ui basic inverted form segment">
			<h3 class="section header"><i class="phone icon"></i> Contact Details</h3>
			<p>Please provide your contact details.
				You will be contacted once you have been scheduled for an appointment.</p>
			<div class="two fields">
				<div class="field">
					<label>Mobile Number</label>
					<div class="ui labeled fluid input">
						<div class="ui label">+63</div>
						<input type="text" name="number" placeholder="919 345 2658">
					</div>
				</div>
				<div class="field">
					<label>Email</label>
					<input type="text" name="age" placeholder="juan.delacruz@example.com">
				</div>
			</div>
		</div>
	</div>
	<div class="actions">
		<button id="connect-schedule-modal-close" class="ui red basic inverted button">Cancel</button>
		<button class="ui green basic inverted button" name="submit">Proceed</button>
		<?php echo form_close(); ?>
	</div>
</div>

<!-- load page-specific custom js -->
<script type="text/javascript" src="<?php echo base_url('js/connect.js') ?>"></script>
<script type="text/javascript">
	(function() {
		$(function() {
			// handles closing of modal when Cancel button is clicked
			$("#connect-schedule-modal-close").click(function(e) {
				e.preventDefault();
				$("#connect-schedule-modal").modal("hide");
			});
		});
	})();
</script>

<!-- temporary page fillers -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
