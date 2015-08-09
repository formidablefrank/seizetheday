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
			</button>
		</div>
	</div>
</div>

<!-- content masthead -->
<div id="content-masthead-identify" class="content-masthead">
	<div class="ui container">
		<div class="header">
			<span class="highlight">Identify</span> a Possible Illness
		</div>
	</div>
</div>

<!-- Display the question -->
<div id="content-identify" class="ui huge center aligned header">
	<?php echo $question->question_text; ?>
</div>

<!-- Display yes and no buttons -->
<div class="ui stackable centered grid container">

	<div class="ui massive buttons">
			<a class="ui positive button" href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choices[0]->choice_id) ?>">
				<?php echo $choices[0]->choice_text; ?>
			</a>
			<div class="or"></div>
			<a class="ui negative button" href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choices[1]->choice_id) ?>">
				<?php echo $choices[1]->choice_text; ?>
			</a>

	</div>

</div>

<!-- load page-specific custom js -->
<script type="text/javascript" src="<?php echo base_url('js/identifyquestions.js') ?>"></script>

<!-- temporary page fillers -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
